
<article>
        <h5 class="alert alert-success mt-3">Thống kê hàng hóa từng loại</h5>
        <table class="table mt-4 mb-4">
            <thead class="table-success">
              <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Số lượng</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhất</th>
                <th>Giá trung bình</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach ($listtk as $tk) {
                extract($tk);
             
              echo ' <tr>
              <td class="pb-3 pt-3">'.$madm.'</td>
              <td class="pb-3 pt-3">'.$tendm.'</td>
              <td class="pb-3 pt-3">'.$countsp.'</td>
              <td class="pb-3 pt-3">'. number_format($maxgiasp).' VND</td>
              <td class="pb-3 pt-3">'.number_format($mingiasp).'  VND</td>
              <td class="pb-3 pt-3">'.number_format($avggiasp).'  VND</td>
            </tr>';
              }
              ?>
              <?php 
// Số lượng sản phẩm trên mỗi trang
$limit = 10;

// Xác định trang hiện tại
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Tính toán vị trí bắt đầu
$start = ($page - 1) * $limit;

// Chỉnh sửa truy vấn SQL
$listtk = loadall_sp($start, $limit);

// Tính tổng số trang
// $total_pages = ceil(getTotalProducts() / $limit);

// Hiển thị các liên kết phân trang
// for ($i = 1; $i <= $total_pages; $i++) {
//     echo "<a href='list.php?page=$i'>$i</a> ";
// }
// ?>

            </tbody>
          </table>
          <div class="wrap-btn" style="display: flex; justify-content: space-between">
          <div class="form-group pb-4">
            <a href="index.php?act=bieudo" class="btn btn-success">Xem biểu đồ</a>
          </div>
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled">
                <span class="page-link">Previous</span>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item " aria-current="page">
                <span class="page-link">2</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
        
      </article>
    