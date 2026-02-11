<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Dashboard | Library</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background-color: #f4f6f9;
}
.sidebar {
    width: 230px;
    height: 100vh;
    position: fixed;
    background: #343a40;
    color: white;
}
.sidebar a {
    color: white;
    text-decoration: none;
    padding: 12px;
    display: block;
}
.sidebar a:hover {
    background: #495057;
}
.content {
    margin-left: 240px;
    padding: 20px;
}
.card-icon {
    font-size: 30px;
}
</style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4 class="text-center py-3">📚 ห้องสมุด</h4>
    <a href="#">Dashboard</a>
    <a href="../book_list/book_list.php">📖 หนังสือ</a>
    <a href="../borrow/borrow.php">📥 ยืมหนังสือ</a>
    <a href="../logout/logout.php">🚪 Logout</a>
</div>

<!-- Content -->
<div class="content">
    <h3>Dashboard</h3>

    <!-- Cards -->
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>หนังสือทั้งหมด</h6>
                            <h3>120</h3>
                        </div>
                        <i class="bi bi-book card-icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h6>สมาชิก</h6>
                    <h3>35</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h6>ยืมวันนี้</h6>
                    <h3>8</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h6>ค้างส่ง</h6>
                    <h3>2</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="card mt-4">
        <div class="card-header">
            รายการยืมล่าสุด
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ชื่อหนังสือ</th>
                    <th>ผู้ยืม</th>
                    <th>วันที่</th>
                </tr>
                <tr>
                    <td>Database System</td>
                    <td>สมชาย</td>
                    <td>2026-02-09</td>
                </tr>
            </table>
        </div>
    </div>

</div>

</body>
</html>
