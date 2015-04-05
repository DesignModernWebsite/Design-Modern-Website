<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://marketplace.envato.com/api/v3/search:themeforest,wordpress,good.json');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ch_data = curl_exec($ch);
curl_close($ch);

if(!empty($ch_data))
{
    $json_data = json_decode($ch_data, true);
    print_r($json_data);
    $data_count = count($json_data['search']) -1;
     
    echo '<ul>';
    for($i = 0; $i <= $data_count; $i++)
    {
        $url_zapytanie = "http://marketplace.envato.com/api/v3/item:".$json_data['search'][$i]['id'].".json";
        echo $url_zapytanie;
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $url_zapytanie);
        curl_setopt($ch2, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        $ch_data2 = curl_exec($ch2);
        curl_close($ch2);
        $json_data2 = json_decode($ch_data2, true);
        print_r($json_data2);
        echo '<li><img style="width: 560px;" src="',$json_data2['item']['thumbnail'],'" alt="" /><a href="',$json_data2['item']['live_preview_url'],'">',$json_data2['item']['item'],'</a></li>';
    }
    echo '</ul>';
}
else
{
    echo 'Sorry, but there was a problem connecting to the API.';
}

get_footer(); 