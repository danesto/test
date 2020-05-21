<?php include '../models/comments/comments.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body class="bg-light">
    <main>
        <nav class="bg-success p-4 shadow">
            <h1 class="text-warning text-center">Admin Dashboard</h1>
        </nav>
        <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <h1 class="text-success">Approve comments for publishing</h1>
                <div class="card mt-5">
                    <div class="card-header bg-primary text-light">
                        <h2>List of comments that are not approved yet</h2>
                    </div>
                    <div class="card-body">
                    <?php $comments = Comment::disabledComments(); ?>
                    <table class="table table-sm table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Text</th>
                            <th>Approve</th>
                        </tr>
                        <?php if(isset($comments) && !empty($comments)): ?>
                        <?php foreach($comments as $comment): ?>
                        <tr>
                            <td><?= $comment->name ?></td>
                            <td><?= $comment->email ?></td>
                            <td><?= $comment->text ?></td>
                            <td>
                                <form action="../models/comments/approveComment.php" method="POST">
                                    <input type="hidden" name="name" value="<?= $comment->name ?>">
                                    <input type="hidden" name="email" value="<?= $comment->email ?>">
                                    <input type="hidden" name="text" value="<?= $comment->text ?>">
                                    <input type="hidden" name="id" value="<?= $comment->id ?>">
                                    <button type="submit" class="btn btn-success">Approve</button>
                                </form>    
                            </td>
                        </tr>
                            
                        <?php endforeach; ?> 
                        <?php else: ?>
                        <td colspan="4">
                            All comments are approved
                        </td>
                        <?php endif; ?> 
                        
                    </table>  
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
</body>
</html>