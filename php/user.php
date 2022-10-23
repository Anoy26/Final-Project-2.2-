<?php
$n=10;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

echo getName($n);
?>

<div class="input_feild">
                    <level>Unit</level>
                    <div class="custom_select">
                        <select name="unit" required>
                            <option value="">Select</option>
                            <option value="A"
                            <?php
                                if($result[Unit]=='A')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >A</option>
                            <option value="B"
                            <?php
                                if($result[Unit]=='B')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >B</option>
                            <option value="C"
                            <?php
                                if($result[Unit]=='C')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >C</option>
                            <option value="D"
                            <?php
                                if($result[Unit]=='D')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >D</option>
                            <option value="E"
                            <?php
                                if($result[Unit]=='E')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >E</option>
                            <option value="H"
                            <?php
                                if($result[Unit]=='H')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >H</option>
                        </select>
                    </div>
                </div>