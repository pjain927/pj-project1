          <div class="cart-block">
              <form action="cart/update" method="post">
              <table cellpadding="6" cellspacing="1" style="width: 100%" border="0">
              <tr>
                <th>QTY</th>
                <th>Item Description</th>
                <th style="text-align: right">Item Price</th>
              </tr>
              <?php $i = 1; ?>
          <?php foreach ($this->cart->contents() as $items): ?>
          <input type="hidden" name="<?php echo $i.'[rowid]'; ?>" value="<?php echo $items['rowid']; ?>">
          <tr>
            <td><input type="text" name="<?php echo $i.'[qty]';?>" value="<?php echo $items['qty']; ?>" maxlength ="3" size="5" style="color:red;"></td>
            <td><?php echo $items['name'];?></td>
            <td style="text-align: right"><?php echo $this->cart->format_number($items['price']);?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
              <tr>
                <td></td>
                <td class="right"><strong>Total</strong></td>
                <td class="right" style="text-align: right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
              </tr>
                </table>
                <p><button class="btn btn-default" type="submit">Update Cart</button>
                <a class="btn btn-default" href="cart">Go To Cart</a>
                </p>
              </form>
              
            </div>
                <div class="panel panel-default panel-list">
                <div class="panel-heading panel-heading-dark">
                    <h3 class="panel-title">Categories
                    </h3>
                </div>
                <!-- List Group -->
                <ul class="list-group">
                <?php //foreach($get_categories_h as $categories) :?>
                <li class="list-group-item"><a href="#">Gaming Consoles</a></li>
              <?php //endforeach; ?>
                <li class="list-group-item"><a href="#">Xbox One Games</a></li>
                <li class="list-group-item"><a href="#">Playstation 4 Games</a></li>
                <li class="list-group-item"><a href="#">Nintendo Wii U Games</a></li>
                <li class="list-group-item"><a href="#">Xbox 360 Games</a></li>
                <li class="list-group-item"><a href="#">Playstation 3 Games</a></li>
                <li class="list-group-item"><a href="#">Nintendo Wii Games</a></li>
                <li class="list-group-item"><a href="#">Other Console</a></li>
                </ul>
