<?php
echo json_encode(array(1, 2, 3));
echo '<br>';
json_encode(array(1, 2, 3), JSON_FORCE_OBJECT);
echo '<br>';
echo json_encode(array(array(1, 2, 3)));
echo '<br>';
echo json_encode(array(array(1, 2, 3)), JSON_FORCE_OBJECT);
echo '<br>';
echo json_encode(array('dev' => 'ABVCCCC', 'station' => 'abc3123123123123asdasd','lines' => (array('A',2,3))));
// 輸出結果
// [1,2,3]
// {"0":1,"1":2,"2":3}
// [[1,2,3]]
// {"0":{"0":1,"1":2,"2":3}}
// {"1":123,"2":"abc"} // 本來就會輸出 Object
?>