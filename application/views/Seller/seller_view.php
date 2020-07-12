<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body style="background-color: lightpink">
<div class="container mt-5" >
    <div class="card">
        <div class="card-body">

                <table class="table table-hover tabble-striped">
                    <?php foreach($seller as $s): ?>
                    <tr>
                        <th>title</th>
                        <td><?= $s->title;?></td></tr>

                    <tr>  <th>Author</th>
                        <td><?= $s->author;?></td></tr>

                    <tr><th>Price</th>
                        <td><?= $s->price;?></td></tr>

                    <tr> <th>Oldprice</th>
                        <td><?= $s->oldprice;?></td></tr>

                    <tr> <th>Page</th>
                        <td><?= $s->page;?></td></tr>

                    <tr> <th>Isbn</th>
                        <td><?= $s->isbn;?></td></tr>

                    <tr> <th>Descr</th>
                        <td><?= $s->descr;?></td></tr>

                     <tr><th>Category</th>
                        <td><?= $s->cat;?></td></tr>
                    <?php endforeach;?>
                </table>

        </div>

    </div>
</div>
</body>