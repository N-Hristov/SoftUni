<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sidebar Builder</title>
    <style>
        aside {
            background: deepskyblue;
            border: 1px solid black;
            border-radius: 15px;
            margin: 5px 0;
            padding: 0 10px;
            width: 150px;
        }
        aside a {
            color: inherit;
        }
        aside ul li {
            list-style-type: circle;
        }
    </style>
</head>
<body>
<form method="post">
    Categories:
    <input type="text" name="categories">
    Tags:
    <input type="text" name="tags">
    Months:
    <input type="text" name="months">
    <button type="submit">Submit!</button>
    <?php if (!empty($_POST['categories']) && isset($_POST['categories'])) : ?>
    <aside>
        <h2>Categories</h2>
        <ul>
            <?php foreach (explode(', ', $_POST['categories']) as $category) : ?>
                <li><a href="#"><?=$category?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
    <?php endif; ?>
    <?php if (!empty($_POST['tags']) && isset($_POST['tags'])) : ?>
    <aside>
         <h2>Tags</h2>
         <ul>
             <?php foreach (explode(', ', $_POST['tags']) as $tag) : ?>
                 <li><a href="#"><?=$tag?></a></li>
             <?php endforeach; ?>
         </ul>
    </aside>
    <?php endif; ?>
    <?php if (!empty($_POST['months']) && isset($_POST['months'])) : ?>
        <aside>
            <h2>Months</h2>
            <ul>
                <?php foreach (explode(', ', $_POST['months']) as $tag) : ?>
                    <li><a href="#"><?=$tag?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    <?php endif; ?>
</body>
</html>