<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <h2> Post Page</h2>

        <form action="Main/insert" method="POST">
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" aria-describedby="description">
          </div>
          <div class="form-group">
            <label for="completed">Completed</label>
            <select class="form-control" id="completed" name="completed">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
        <table class="table table-bordered">
            <tr>
              <td>Description</td>
              <td>Completed</td>
            </tr>
        
          <?php 
            foreach($todos as  $row):
              echo "<tr>";
              echo "<td>$row->description</td>";
              echo "<td>";
              if($row->completed==1)
              {
                echo "Yes";
              }
              else{
                echo "No";
              }
              echo "</td>";
              echo "</td>";
            endforeach;
          ?>
        </table>
            
         

    </div>
  </div>
</div>


