$content = file_get_contents('http://www.sparkfun.com/commerce/product_info.php?products_id=9279');

preg_match('#<tr><th>(.*)</th> <td><b>price</b></td></tr>#', $content, $match);
$price = $match[1];

preg_match('#<input type="hidden" name="quantity_on_hand" value="(.*?)">#', $content, $match);
$in_stock = $match[1];

echo "Price: $price - Availability: $in_stock\n";
