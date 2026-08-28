<?php
    $pag = "usuarios";

?>


<a type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Usúario</a>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
    <table class="table table-striped" id="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>



<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable({
            "language" : {
            "url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
        }
        });
    });
</script>