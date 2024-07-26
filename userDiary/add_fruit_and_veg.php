<?php include '../view/header.php';?>

<main>
  
    <h2>Choose your colours</h2>
    <h3> Select from the drop downlists which fruit or vegetable you have eaten today!</h3>
    
        <form action="." method="post" id="aligned">
            
            <label for="purple">Purple:</label>
            <select name="purple" class="dropDownPurple">
                <option value="">--- Choose your purple fruit or veg ---</option>
                <?php foreach ($purple as $purples) : ?> <!-- display in drop down list -->
                    <option value="<?php echo ($purples[0]);?>"><?php echo ($purples[0]);?></option>
                <?php endforeach; ?>
                
            </select> 
            </br>
            
            <label for="blue">Blue:</label>
            <select name="blue" class="dropDownBlue">
                <option value="">--- Choose your blue fruit or veg ---</option>
                <?php foreach ($blue as $blues) : ?> <!-- display in drop down list -->
                    <option value="<?php echo ($blues[0]);?>"><?php echo ($blues[0]);?></option>
                <?php endforeach; ?>
                
            </select> 
            </br>

            <label for="green">Green:</label>
            <select name="green" class="dropDownGreen">
                <option value="">--- Choose your green fruit or veg ---</option>
                <?php foreach ($green as $greens) : ?> <!-- display in drop down list -->
                    <option value="<?php echo ($greens[0]);?>"><?php echo ($greens[0]);?></option>
                <?php endforeach; ?>
                
            </select> 
            </br>

            <label for="yellow">Yellow:</label>
            <select name="yellow" class="dropDownYellow" >
                <option value="">--- Choose your yellow fruit or veg ---</option>
                <?php foreach ($yellow as $yellows) : ?> <!-- display in drop down list -->
                    <option value="<?php echo ($yellows[0]);?>"><?php echo ($yellows[0]);?></option>
                <?php endforeach; ?>
                
            </select> 
            </br>

            <label for="orange">Orange:</label>
            <select name="orange" class="dropDownOrange">
                <option value="">--- Choose your orange fruit or veg ---</option>
                <?php foreach ($orange as $oranges) : ?> <!-- display in drop down list -->
                    <option value="<?php echo ($oranges[0]);?>"><?php echo ($oranges[0]);?></option>
                <?php endforeach; ?>
                
            </select> 
            </br>

            <label for="red">Red:</label>
            <select name="red" class="dropDownRed">
                <option value="">--- Choose your red fruit or veg ---</option>
                <?php foreach ($red as $reds) : ?> <!-- display in drop down list -->
                    <option value="<?php echo ($reds[0]);?>"><?php echo ($reds[0]);?></option>
                <?php endforeach; ?>
                
            </select> 
            </br>

            <label for="brown">Brown:</label>
            <select name="brown" class="dropDownBrown">
                <option value="">--- Choose your brown fruit or veg ---</option>
                <?php foreach ($brown as $browns) : ?> <!-- display in drop down list -->
                    <option value="<?php echo ($browns[0]);?>"><?php echo ($browns[0]);?></option>
                <?php endforeach; ?>
                
            </select> 
            </br>

            <label for="white">White:</label>
            <select name="white" class="dropDownWhite">
                <option value="">--- Choose your white fruit or veg ---</option>
                <?php foreach ($white as $whites) : ?> <!-- display in drop down list -->
                    <option value="<?php echo ($whites[0]);?>"><?php echo ($whites[0]);?></option>
                <?php endforeach; ?>
                
            </select> 
            </br>

        </form>
</main>
<?php include '../view/footer.php'; ?>