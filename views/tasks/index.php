<?php require 'views/layouts/top.php' ?>

<h1>List task</h1>
<ul>
<?php foreach ($tasks as $task){ ?>
    <li><strong>Name</strong> : <?=$task->work_name;?></li>
    <li><strong>Status</strong> : <?=$task->status;?></li>
    <li><strong>Date_start</strong> : <?=$task->starting_date;?></li>
    <li><strong>Date_end</strong> : <?=$task->ending_date;?></li>
    <li><a href="delete?id=<?php echo $task->id; ?>">DELETE</a></li>
    <hr>
<?php };?>
</ul>


<section>
    <h1>Work name</h1>
    <form action="/add" method="post">
        <textarea name="work_name" cols="30" rows="3"></textarea>
        <div class="seclect-option">
            <span>Chose</span>
            <select name="status">
                <option>Planning</option>
                <option>Doing</option>
                <option>Completed</option>
            </select>
        </div>
        <div>
            <span> Day Start</span>
            <input type="date" name="starting_date">
        </div>
        <div>
            <span> Day End</span>
            <input type="date" name="ending_date">
        </div>
        <input type="submit" value="Submit">
    </form>
</section>

<?php require 'views/layouts/bottom.php' ?>