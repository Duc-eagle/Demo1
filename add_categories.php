<?php?>

<h2 class="pt-2 px-2">Thêm danh mục</h2>

<form action="">
    <div class="px-5 py-4">
        <label for="name">Name(*)</label>
        <input type="text" id="name" name="name">
    </div>

    <div class="px-5 py-4">
        <label for="email">Email(*)</label>
        <input type="email" id="email" name="email">
    </div>

    <div class="px-5 py-4">
        <label for="fname">First name</label>
        <input type="text" id="fname" name="fname">
    </div>

    <div class="px-5 py-4">
        <label for="lname">Last name</label>
        <input type="text" id="lname" name="lname">
    </div>

    <div class="px-5 py-4">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>
</form>
<div class="dropdown px-5 py-4">
    <span>Role</span>
    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Admin</a></li>
        <!--                    <li><a class="dropdown-item" href="#">Link 2</a></li>-->
        <!--                    <li><a class="dropdown-item" href="#">Link 3</a></li>-->
    </ul>
</div>
<button class="btn btn-primary mx-5 my-3" type="submit">Thêm thành viên</button>
