<?php?>
<div class="d-flex align-items-center pt-2 px-2 py-3 w-100" style="background-color: #c9c2c2">
    <span class="material-symbols-outlined text-primary">home</span><div style="display: inline;color: gray">/ Quản lý sản phẩm</div>
</div>

<div>
    <h2 class="px-3 pt-4" style="color: dimgray">Quản lý sản phẩm</h2>
</div>

<div class="container-fluid pt-5">
    <div class="container px-3" style="background-color: white;height: 200px">
        <br>
        <a href="?page_layout=add_product" class="btn btn-success text-center <?php if(isset($_GET['page_layout']) && $_GET['page_layout'] == 'add_product'){echo 'active';}?>" style="padding-right: 15px;width: 178.6px">
            <span class="material-symbols-outlined">add</span>Thêm sản phẩm
        </a>

        <table class="table table-bordered" style="margin-top: 16px">
            <thead class="table-secondary">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
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

