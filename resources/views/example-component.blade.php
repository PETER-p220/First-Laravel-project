<div>
    {{-- Success is as dangerous as failure. --}}
    <h1>Hello</h1>
    <h1>{{$batch}}</h1>
    <p>{{$student}}</p>
        <label for="batch_name"><b>Batch name</b></label>
    <input type="text" placeholder="batch name" name="batch_name" required>

    <label for="course_name"><b>Course name</b></label>
    <input type="text" placeholder="course name" name="course_name" required>

    <label for="start_date"><b>Start date</b></label>
    <input type="text" id="calender" placeholder="start date" name="start_date" required>

    <button type="submit" wire:click="handleClick()">Save</button>
    </div>
