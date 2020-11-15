<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database nguoidung</h4>

      <a class="pull-left themmoi" href="?action=them"> Thêm mới</a>

      <div class="search_box pull-right" style="margin-right: 50px; margin-top: 0px;">
          <input type="text" placeholder="Search"/>&ensp;
          <a href="#"><i class="fa fa-search" id="i1"></i></a>
      </div>

      <br>
      <br>
   
      <table border="3" cellpadding="10" style="font-size: 15px;">
          
          <thead>
               <tr>
                  <th>Mã ND</th>
                  <th class="theadd">Tên tài khoản</th>
                  <th class="theadd">SDT</th>
                  <th class="theadd">Email</th>
                  <th class="theadd">Giới tính</th>
                  <th class="theadd">Địa chỉ</th>
                  <th>Hành động</th>
               </tr>
          </thead>
          <tbody>
              <?php foreach ($data as $row) { ?>
              <tr>
                  <td scope="row"><?= $row['idUser'] ?></td>
                  <td><?= $row['ho']. $row['ten'] ?></td>
                  <td><?= $row['sodienthoai'] ?></td>
                  <td><?= $row['email'] ?></td>
                  <td><?= $row['gioitinh'] ?></td>
                  <td><?= $row['diachi'] ?></td>
                  <td>
                      <!-- để ý dấu bằng trong href -->
                      <a href="?action=xemnguoidung&id=<?= $row['idUser'] ?>" type="button" class="btn btn-success">Xem</a>
                      <a href="?action=suanguoidung" type="button" class="btn btn-warning">Sửa</a>
                      <a href="#" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">
                        Xóa</a>
                  </td> 
              </tr>
              <?php } ?>
          </tbody>
      </table>
     

</div>

</div>



