<?php
    $handle = fopen("domain.dat", "r"); // 파일열기

    global $BookArray;

    while(!feof($handle)) {
        $array = explode("|", fgets($handle));
        $id = trim($array[0]);
        $BookArray[$id]['name'] = trim($array[1]);
        $BookArray[$id]['unitPrice'] = trim($array[2]);
        $BookArray[$id]['author'] = trim($array[3]);
        $BookArray[$id]['description'] = trim($array[4]);
        $BookArray[$id]['category'] = trim($array[5]);
        $BookArray[$id]['unitsInStock'] = trim($array[6]);
        $BookArray[$id]['releaseDate'] = trim($array[7]);
        $BookArray[$id]['condition'] = trim($array[8]);
        $BookArray[$id]['filename'] = trim($array[9]);
        $BookArray[$id]['quantity'] = trim($array[10]);
    }
    fclose($handle);
    
    function getAllBooks() {
        global $BookArray;
        return $BookArray;
    }

    function getBookById($id) {
        global $BookArray, $bookById;
        
        if(array_key_exists($id, $BookArray)){
            $bookById = $BookArray[$id];
            return $bookById;
        }
        return null;
    }

    function addBook($bookId, $nBook) {
        global $BookArray;
        $BookArray[$bookId]["name"] = $nBook["name"];
        $BookArray[$bookId]["unitPrice"] = $nBook["unitPrice"];
        $BookArray[$bookId]["author"] = $nBook["author"];
        $BookArray[$bookId]["description"] = $nBook["description"];
        $BookArray[$bookId]["category"] = $nBook["category"];
        $BookArray[$bookId]["unitInStock"] = $nBook["unitInStock"];
        $BookArray[$bookId]["releaseDate"] = $nBook["releaseDate"];
        $BookArray[$bookId]["condition"] = $nBook["condition"];
    }
?>
