<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

    body {
        min-height: 100vh;
        background: #f8b4df;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Cairo', sans-serif;
        background-image:
            radial-gradient(ellipse at 20% 50%, rgba(99, 102, 241, 0.15) 0%, transparent 60%),
            radial-gradient(ellipse at 80% 20%, rgba(16, 185, 129, 0.1) 0%, transparent 50%);
    }
    .calculator-card {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 24px;
        padding: 40px;
        width: 450px;
        backdrop-filter: blur(20px);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255,255,255,0.08);
    }
    .calc-title {
        text-align: center;
        color: #2f2424;
        font-size: 1.6rem;
        font-weight: 900;
        margin-bottom: 32px;
        letter-spacing: 1px;
        display: inline-block;
        background: linear-gradient(135deg, #33212e, #daacd0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
        .select {
        width: 100%;
        padding: 10px 10px;
        background: rgba(246, 204, 241, 0.97);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 12px;
        color: black;
        font-size: 1rem;
        font-family: 'Cairo', sans-serif;
        outline: none;
        transition: border-color 0.3s;
        appearance: none;

    }
      .btn {
        width: 50%;
        padding: 7px 7px;
        background: rgba(245, 216, 237, 0.97);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 12px;
        color: black;
        font-size: 1rem;
        font-family: 'Cairo', sans-serif;
        transition: border-color 0.3s;
        appearance: none;

    }
    </style>
</head>
<body>
<div class="calc-title"><span>Calculatrice    :  </span></div>

<form method="POST" class='calculator-card'>
    Nombre 1:
    <input type="text" name="n1" class="select"><br><br>

    Nombre 2:
    <input type="text" name="n2" class="select"><br><br>

    Operation:
    <select name="op" class="btn">
        <option value="+">Addition (+)</option>
        <option value="-">Soustraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select><br><br>

    <input type="submit" name="calculer" class="btn" value="Calculer">
  <br>
  <br>
    <input type="reset" value="Effacer" class="btn"><br><br>

    Résultat:
    <input type="text"  class="select" value="
    <?php
    
    if(isset($_POST['calculer'])) {

        $a = $_POST['n1'];
        $b = $_POST['n2'];
        $op = $_POST['op'];
        if ($a === '' || $b === '') {
        echo'Veuillez entrer les deux numéros.';
        }
        else{
        if (is_numeric($a)&& is_numeric($b)){
        if($op == "+") {
            echo $a + $b;
        }
        elseif($op == "-") {
            echo $a - $b;
        }
        elseif($op == "*") {
            echo $a * $b;
        }
        elseif($op == "/") {
            if($b != 0) {
                echo $a / $b;
            } else {
                echo "Il est impossible de diviser par zéro.";
            }
        }
        }
        else {
            echo "veuillez entrer des nombres valides."; }
    }}
    ?>">
</form>

</body>
</html>