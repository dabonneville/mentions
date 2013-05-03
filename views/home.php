<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="/public/style.css">
</head>
<body>
  <header><h2>Mentions.in</h2></header>

  <h1>Generate social sharing analytics for any URL or RSS Feed.</h1>

  <form method="get">
    <input type="text" name="url" placeholder="url, rss", id="url" value="<?= $url ?>">
    <input type="submit" name="submit" value="GO" id="submit">
  </form>

  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <th style="border-bottom: 5px solid #4e5f72;">Date</th>
      <th style="border-bottom: 5px solid #4e5f72;">Title</th>
      <th style="border-bottom: 5px solid hsla(207, 84%, 57%, 1)">Tweets</th>
      <th style="border-bottom: 5px solid hsla(221, 44%, 41%, 1)">Likes</th>
      <!--<th style="border-bottom: 5px solid hsla(6, 65%, 51%, 1)">+1s</th>-->
      <th style="border-bottom: 5px solid hsla(11, 83%, 53%, 1)">Stumbles</th>
    </tr>
    <? foreach( $items as $item ) { ?>
    <tr>
      <td><?= $item['pub_date'] ?></td>
      <td><a href="<?= $item['permalink'] ?>"><?= $item['title'] ?></a></td>
      <td><?= $item['tweet_count'] ?></td>
      <td><?= $item['fb_count'] ?></td>
      <td><?= $item['su_count'] ?></td>
    </tr>
    <? } ?>
  </table>
  <footer>
  	made by <a href="https://twitter.com/_rishabhp">@_rishabhp</a>
  </footer>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="/public/main.js"></script>
</body>
</html>
