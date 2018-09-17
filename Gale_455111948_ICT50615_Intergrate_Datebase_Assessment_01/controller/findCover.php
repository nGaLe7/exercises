<?php 
include '../../model/dataBase.php';
include '../../model/myFunctions.php';
/* re name so code is different*/

$stmt = $conn->prepare('SELECT BookID, BookTitle, MillionsSold, coverImagePath FROM book order by MillionsSold');
$stmt->execute();
$result = $stmt-> fetchAll();
    if ($stmt->rowCount() < 1 ) {
        echo "The Bookshelf is empty";
    } else {
        foreach( $result as $row ) {?>
        <div class="bookCover">
            <figure>
                <img src="<?php echo $row['coverImagePath'];?>">
                <figcaption>
                    <?php echo $row['BookTitle']; ?><br>
                    <?php echo '<p class="black">' . $row["MillionsSold"]." Million Sold".'<?p>';?><br>
                    <a href="?link=edit&BookID=<?php echo $row['BookID'];?>">Edit</a><br>
                    <a href="?link=Delete&BookID=<?php echo $row['BookID'];?>">Delete</a><br>
                </figcaption>
            </figure>
        </div>

        <?php
    }

}

?>