<?php include_once 'models/products/product.php'; ?>
<?php include_once 'models/comments/comments.php'; ?>

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
            <h1 class="text-warning text-center">Citrus Catalog</h1>
        </nav>
        <div class="container mt-5">
        <!-- PRODUCTS SECTION -->
            <div class="row">
                <?php $products = Product::fetchAll(); ?>
                    <?php foreach($products as $product): ?>
                        <div class="col-md-4 text-center mt-5">
                            <div class="product shadow rounded">
                                <img src="public/img/<?= $product->img ?>" alt="<?= $product->title ?>">
                                <h1 class="product-title text-success mt-3">
                                    <?= $product->title ?>
                                </h1>
                                <div class="product-body text-secondary mt-3">
                                    <?= $product->description ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>    
            </div>
            <!-- COMMENTS SECTION -->
            <div class="row mt-5">
                <div class="col-md-10">
                <h1 class="text-warning">Comments</h1>
                <?php $comments = Comment::fetchAll(); ?>
                <?php if(isset($comments) && !empty($comments)): ?>
                    <?php foreach($comments as $comment): ?>
                        <div class="comment shadow">
                            <div class="comment-user">
                                <p> <?= $comment->name ?> | <?= $comment->email ?> </p>
                            </div>
                            <div class="comment-text">
                                <?= $comment->text ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php else: ?>    
                    <div class="alert alert-warning">There are no comments at this moment</div>
                    <?php endif; ?>    
                </div>
            </div>
            <!-- COMMENT FORM -->
            <div class="row mt-5">
                <div class="col-md-10">
                    <form action="models/comments/insertComment.php" method="POST">
                        <div class="card">
                            <div class="card-header">
                                <h4>Post a comment</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="text">Comment text</label>
                                    <textarea name="text" placeholder="Text.." class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-success">Comment!</button>
                            </div>
                        </div>
                    </form>      
                </div>
            </div>
        </div>
    </main>
</body>
</html>