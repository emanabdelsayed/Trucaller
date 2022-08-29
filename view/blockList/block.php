<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blockList</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="block.css">
</head>

<body>
    <div class="blocklistHeader">
        <p class="word">
            <span>
                <a href="../index.php" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>
                </a>
            </span>
            BlockList
        </p>
    </div>
    <form method="POST" action="bloock.php">
        
           
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'truecaller');
        $query = "SELECT * FROM `block list`";
        // include 'conn.php';
        $query_run = mysqli_query($conn, $query);
        foreach ($query_run as $items) {
        ?>
            <div class="blockedContact">
                <div class="bPhoto">
                    <img src="blocked_contact (1).png" alt="">
                </div>
                <div class="bContactInfo">
                    <div class="cName">
                        <p><?= $items['blockName'] ?></p>
                    </div>
                    <div class="phoneNum">
                        <p><?= $items['blockPhone'] ?></p>
                    </div><br>
                </div>
                <button style="border: none;
    background: none;
    text-decoration: underline;
    text-underline-offset: 0.3rem;
    text-decoration-thickness: 0.1rem;" name=<?=$items['blockId']?> type="submit" class="minus">
                    <br>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                        </svg>
                    </a>
                </button>
            </div>
        <?php
        }
        ?>
    </form>
</body>

</html>