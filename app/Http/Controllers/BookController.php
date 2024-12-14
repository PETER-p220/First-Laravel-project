namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    // Redirect to the provider's authentication page
    public function redirectToProvider($provider)
    {
        return Book::driver($provider)->redirect();
    }

    // Handle the callback after the provider's authentication
    public function handleProviderCallback($provider)
    {
        try {
            // Get user information from the provider
            $user = Book::driver($provider)->user();

            // Check if the user exists in the database
            $existingUser = User::where('email', $user->getEmail())->first();

            if ($existingUser) {
                // Log in the user if they already exist
                Auth::login($existingUser, true);
            } else {
                // Create a new user if they don't exist
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'provider' => $provider,
                    'provider_id' => $user->getId(),
                ]);

                Auth::login($newUser, true);
            }

            return redirect()->to('/home'); // Redirect to your intended page after login
        } catch (\Exception $e) {
            return redirect('login'); // Handle errors if something goes wrong
        }
    }
}
