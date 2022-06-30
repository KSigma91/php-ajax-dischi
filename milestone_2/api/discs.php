<?php
include __DIR__ . '/../db/api.php';

header('Content-Type: application/json');

if (isset($_GET['genre'])) {
    if ($_GET['genre'] === 'all') {
        $arr_filtered = $album_list;
    } else {
        $arr_filtered = [];
        foreach ($album_list as $disc) {
            if (strtolower($disc['genre']) === $_GET['genre']) {
                $arr_filtered[] = $disc;
            }
        }
    }

    echo json_encode([
        'success'   => true,
        'response'  => $album_list
    ]);
} else {
    echo json_encode([
        'success'   => false
    ]);
}
?>