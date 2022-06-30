<?php
include __DIR__ . '/../db/api.php';

header('Content-Type: application/json');

$arr_genres = [];
foreach ($album_list as $disc) {
    if (!in_array($disc['genre'], $arr_genres)) {
        $arr_genres[] = $disc['genre'];
    }
}

echo json_encode([
    'success'   => true,
    'response'  => $arr_genres
]);
?>