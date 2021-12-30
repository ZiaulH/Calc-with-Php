<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calcultor With php</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card_heading">
                <h1 class="heading">Calcultor <br>with php</h1>
            </div>
            <div class="form">
                <form action="index.php" method="POST">
                    <div class="form__group field">
                        <input type="text" class="form__field" placeholder="Enter Number" name="num1" id='num1' required />
                        <label for="num1" class="form__label">Enter Number</label>
                      </div>
                      <div class="form__group field">
                        <input type="text" class="form__field" placeholder="Enter Number" name="num2" id='num2' required />
                        <label for="num2" class="form__label">Enter Number</label>
                      </div>
                   <div class="form_group">
                    <select class="select" name="operator" id="operator">
                        <option>None</option>
                        <option value="Add">Add</option>
                        <option value="Subtract">Subtract</option>
                        <option value="Multiply">Multiply</option>
                        <option value="Divide">Divide</option>
                        <option value="Square">Square</option>
                    </select>
                   </div>
                   <div class="form_group">
                    <button type="submit" class="btn"  name="result" id="result" value="result">Calculate</button>
                </div>
                </form>
                <p class="result"> Your answer is :  
                    <span>
                        <?php 
                                if (isset($_POST['result'])) {
                                    $result1 = $_POST['num1'];
                                    $result2 = $_POST['num2'];
                                    $operator = $_POST['operator'];
                                    switch ($operator) {
                                        case 'None':
                                            echo "You need to select operator";
                                            break;
                                        case 'Add':
                                            echo $result1 + $result2;
                                            break;
                                        case 'Subtract':
                                            echo $result1 - $result2;
                                            break;
                                        case 'Multiply':
                                            echo $result1 * $result2;
                                            break;
                                        case 'Divide':
                                            echo $result1 / $result2;
                                            break;
                                        case 'Square':
                                            echo $result1 ** $result2;
                                            break;
                                    }
                                }
                            ?>
                    </span>
                </p>
            </div>
        </div>
    </div>
</body>
</html>