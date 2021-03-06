<?php
/**
 * Created by PhpStorm.
 * User: Pacific Frost
 * Date: 4/20/2017
 * Time: 9:34 PM
 */
?>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Author</th>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Image</th>
        <th>Tags</th>
        <th>Comments</th>
        <th>Date</th>
    </tr>
    </tbody>
    <?php
    $query = "SELECT * FROM posts LIMIT 8 ";
    $select_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_posts)) {
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];


        echo "<tr>"
            . "<td>$post_id</td>"
            . "<td>$post_author</td>"
            . "<td><a href='../post.php?p_id={$post_id}'>$post_title</a></td>";

            $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
            $update_category_query = mysqli_query($connection, $query);
            check_query($update_category_query);

            $row = mysqli_fetch_assoc($update_category_query);
            $post_category_title = $row['cat_title'];

        echo "<td>$post_category_title</td>"
            . "<td>$post_status</td>"
            . "<td><img src='../images/$post_image' width='200'></td>"
            . "<td>$post_tags</td>"
            . "<td>$post_comment_count</td>"
            . "<td>$post_date</td>"
            . "<td class='text-center'><a class='btn btn-primary' href='?source=edit_post&p_id=$post_id'><i class='fa fa-pencil'></i></a></td>"
            . "<td class='text-center'><a class='btn btn-danger' href='?delete=$post_id'><i class='fa fa-trash'></i></a></td>"
            . "</tr>";
    }

    if(isset($_GET['delete'])) {
        $the_post_id = $_GET['delete'];
        $query = "DELETE FROM posts WHERE post_id = '{$the_post_id}' ";
        $delete_query = mysqli_query($connection, $query);
        check_query($delete_query);
        header("Location: admin-posts.php");
    }
    ?>
    <tbody>
</table>
</thead>
