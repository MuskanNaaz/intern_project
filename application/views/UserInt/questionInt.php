<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-8">
               <div class="card shadow border-dark">
                   <div class="card-header">
                       <div class="card-heading h3 text-muted">Question..</div>
                   </div>
                   <div class="card-body">
                        <?php foreach($question as $q):?>
                <ol><p class="h2"><li><?= $q->title;?></li></ol>
                <?php endforeach;?>
                  <input type="submit" value="Save & Next" class="btn btn-success mr-5 ">
                  <input type="submit" value="Unsolved" class="btn btn-danger ml-5">
                   </div>
               </div>
            
            </div>
            <div class="col-4">
               <p class="h4 text-muted">Question No Solved ..</p>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                   <button type="button" class="btn btn-light border-secondary mr-2 p-3" style="border-radius:50%">1</button>
                   <button type="button" class="btn btn-light border-secondary mr-2 p-3" style="border-radius:50%">2</button>
                   <button type="button" class="btn btn-light border-secondary mr-2 p-3" style="border-radius:50%">3</button>
                   <button type="button" class="btn btn-light border-secondary mr-2 p-3" style="border-radius:50%">4</button>
                   <button type="button" class="btn btn-light border-secondary mr-2 p-3" style="border-radius:50%">5</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>