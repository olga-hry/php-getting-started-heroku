<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>
Hello
	
	<div style="border: red solid 5px; border-radius: <?php echo htmlspecialchars($_GET['weight']); ?>px; ">
  <?php if (isset($_GET['submitted'])) { ?>
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
  
  
  <p>article_name: <?php echo htmlspecialchars($_GET['article_name']); ?></p>
  <p>article_topic: <?php echo htmlspecialchars($_GET['article_topic']); ?></p>
  <p>comment: <?php echo htmlspecialchars($_GET['comment']); ?></p>
	<p>weight: <?php echo htmlspecialchars($_GET['weight']); ?>  </p>
  <p>mytext: <?php echo htmlspecialchars($_GET['mytext']); ?></p>
  <p>color (<?php echo htmlspecialchars($_GET['color']); ?>) : <span style="background-color: <?php echo htmlspecialchars($_GET['color']); ?>;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
  
  
  
  
  
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>
	</div>

  <?php if (!isset($_GET['submitted'])) { ?>
  <div style="border: red solid 5px;">
  <h1>Play with the HTML form</h1>
  <form action="/index.php" method="GET">
    <input type="hidden" name="submitted" value="yes">
    <p>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
    <br>
    
    <div>
 <label>Название статьи:</label>
           <input class="article_name" type=text name='article_name' >
</div>
    
    <br>
    
    <div><label for="my-select">Рубрика:</label>
                                                       <select id="my-select" name='article_topic' size="1" required>
                                                        <option value="">---------</option>
                                                        <option value="kt">компьютерная техника</option>
                                                        <option value="g-d">графика и дизайн</option>
                                                        <option value="p" selected>программирование</option>
                                                     </select></div>

    
    <br>
    
    <div><label for="my-checkbox" class="ch"> Разрешить комментарии:</label> <input name="comment" id="my-checkbox" type="checkbox" checked></div>  
    <br>
    
    <div><label for="my-textarea" > Текст статьи:</label><br><textarea name='mytext' id="my-textarea"></textarea></div>     
    <br>
    
    <label for="my-color">color: </label>
			<input id="my-color" name="color" type="color">
    
    <br>
    
    
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
	   <br>
	  
	<div>  
	  <label for="my-range">Закругление</label>       <p>0px<input id="my-range" name="weight" type="range" min="0" max="50">50px</p>
	  
	  </div>
	  
	  </div>
	  
  </form>

  <?php } ?>

</body>
</html>
