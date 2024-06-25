<?php

require_once "dbconnect.php";


function newsSections($db) {
    try {                   

        $newsQuery = $db->query("SELECT * FROM articles ORDER BY date DESC LIMIT 3");
        return $newsQuery->fetchAll(PDO::FETCH_ASSOC);
    
    } catch (PDOException $e) {
        echo "Tesing failed: " . $e->getMessage();
        exit;
    }
}



function newsBlock($id, $image, $alt, $blocktext, $heading, $paragraph, $readtime, $postedby, $date, $avatar, $avataralt, $color) {
  return 
  '
   
    <div class="col-lg-4 col-sm-6">
        <section class="vacancies">
            <div>
                <div class="container latestImg">
                
                    <div><img class="jobvac" src="'. htmlspecialchars($image) .'" alt="'.htmlspecialchars($alt).'">
                    </div>
                    <div class="text-block1">
                        <a href="#">'.htmlspecialchars($blocktext).'</a>
                    </div>
                </div>
                <div class="container">
                    <div class="art-details">
                        
                        <h3 class="jobtitle'.htmlspecialchars($id).'">'.htmlspecialchars($heading).'<span class="dots">...</span><span class="jobspan">
                                    '. htmlspecialchars($readtime) .'</span></h3>
                        <div class="jobspec">
                            <p>' . htmlspecialchars($paragraph) . '<span class="dots">...</span>
                            </p>
                        </div>
                        <button class="btn latestbtn1" background-color{color:'. htmlspecialchars($color) .'; } >Read more</button><br>
                        <div class="dateposted">
                            <img class="jobpic" src="' . htmlspecialchars($avatar) .'" alt="' . htmlspecialchars($avataralt) .'">
                            <div class="postedby">
                                <p><strong>' . htmlspecialchars($postedby) . '</strong><br>' . htmlspecialchars($date) . '</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
                            
                        
  ';
}

// Get each records data
if ($db instanceof PDO) {
    foreach (newsSections($db) as $record) {
        echo newsBlock(
            $record["id"],
            $record["image"],
            $record["alt"],
            $record["blocktext"],
            $record["heading"],
            $record["paragraph"],
            $record["readtime"],
            $record["postedby"],
            $record["date"],
            $record["avatar"],
            $record["avataralt"],
            $record["color"]
        );
    }
} else {
    echo "Couldn't set up the article.";
}

