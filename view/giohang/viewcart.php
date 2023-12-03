<script>
document.querySelectorAll('.quantity').forEach(function(quantityInput) {
    quantityInput.addEventListener('change', function(e) {
        var quantity = e.target.value;
        var unitPrice = e.target.parentElement.previousElementSibling.dataset.unitPrice;
        var lineTotalElement = e.target.parentElement.nextElementSibling;
        var lineTotal = quantity * unitPrice;
        lineTotalElement.textContent = lineTotal.toLocaleString() + ' VND';

        var total = Array.from(document.querySelectorAll('.line-total')).reduce(function(total, lineTotalElement) {
            return total + parseInt(lineTotalElement.textContent.replace(/\D/g, ''));
        }, 0);
        document.querySelector('.total').textContent = total.toLocaleString() + ' VND';
    });
});
</script>

<div class="row">
<article class="col-sm-9 mt-3">
    <div class="card">
      <div class="card-header cart">Giỏ hàng</div>
      <div class="card-body">
        <table class="table table-hover">
            <?php viewcart(1); ?>
        </table>
      </div>
    </div>
    <div class=" mt-2">
    <a href="index.php?act=bill"><input type="button" class="btn btn-success" value="Đặt hàng"></a>
      <a href="index.php?act=xoacart"><input type="button" class="btn btn-danger" value="Xóa giỏ hàng"></a>
      <a href="index.php"><input type="button" class="btn btn-warning" value="Xem thêm sản phẩm"></a>
    </div>
</article>

</div>