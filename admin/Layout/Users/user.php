<?php?>

<div class="d-flex align-items-center pt-2 px-2 py-3 w-100" style="background-color: #c9c2c2">
    <span class="material-symbols-outlined text-primary">home</span><div style="display: inline;color: gray">/ Quản lý thành viên</div>
</div>

<div>
    <h2 class="px-3 pt-4" style="color: dimgray">Quản lý thành viên</h2>
</div>

<div class="container-fluid pt-5">
    <div class="container px-3" style="background-color: white;height: 200px">
        <br>
        <a href="?page_layout=add_user" class="btn btn-success text-center <?php if(isset($_GET['page_layout']) && $_GET['page_layout'] == 'add_user'){echo 'active';}?>" style="padding-right: 15px">
            <span class="material-symbols-outlined">add</span>Thêm thành viên
        </a>

        <table class="table table-bordered" style="margin-top: 16px">
            <thead class="table-secondary">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Vai trò</th>
            </tr>
            </thead>
            <tbody>
            <tr>

            </tr>
            </tbody>
        </table>
        <hr>
        <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link">Previous</a></li>
            <li class="page-item"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
    </div>
</div>

