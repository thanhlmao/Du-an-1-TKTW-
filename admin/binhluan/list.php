
 <article>
 <h5 class="alert alert-success mt-4">Danh sách bình luận</h5>
        <table class="table mt-4 mb-4">
          <thead class="table-success">
            <tr>
              <th>ID</th>
              <th>Nội dung</th>
              <th>Người bình luận</th>
              <th>Sản phẩm</th>
              <th>Ngày bình luận</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach($listbl as $bl)  { 
              extract($bl);
              $xoabl = "index.php?act=xoabl&id=".$id;
              echo '<tr>
              <td class="pb-3 pt-3">'.$id.'</td>
              <td class="pb-3 pt-3">'.$noidung.'</td>
              <td class="pb-3 pt-3">'.$iduser.'</td>
              <td class="pb-3 pt-3">'.$idsp.'</td>
              <td class="pb-3 pt-3">'.$ngaybl.'</td>
              <td class="td-opt pb-3 pt-3">
                <a href="'.$xoabl.'" class="btn btn-danger">Xóa</a>
              </td>
            </tr>';
            }
         
            ?>
          </tbody>
        </table>
        <div class="wrap-btn" style="display: flex; justify-content: end">
                <nav aria-label="Page navigation">
          <ul class="pagination">
            <?php for ($i = 1; $i <=$max_pages; $i++): ?>
            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
              <a class="page-link" href="index.php?act=dsbl&page=<?= $i ?>"><?= $i ?></a>
            </li>
            <?php endfor; ?>
          </ul>
        </nav>
        </div>
      </article>