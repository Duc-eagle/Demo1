<?php?>

<h2 class="pt-2 px-2">Thêm danh mục</h2>

<form action="">
    <div class="px-5 py-4">
        <label for="catename">Tên danh mục</label>
        <input type="text" id="catename" name="catename">
    </div>

    <div class="px-5 py-4">
        <label for="slug">Slug</label>
        <input type="text" id="slug" name="slug">
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
<button class="btn btn-primary mx-5 my-3" type="submit">Thêm danh mục</button>
