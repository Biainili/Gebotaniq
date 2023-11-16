<link rel="stylesheet" type="text/css" href="<?php echo ne_asset('/mycss/func-header.css'); ?>">

<?php
function createPageHeader($title) {
    $html = '<div class="container-header">';
    $html .= '<div class="page-header-inner ">';
    $html .= '<ul>';
    $html .= '<li><a href="index.html">Գլխավոր</a></li>';
    $html .= '<li><span>/</span></li>';
    $html .= '<li><a href="products.html">Ապրանքներ</a></li>';
    $html .= '<li><span>/</span></li>';
    $html .= '<li>' . $title . '</li>';
    $html .= '</ul>';
    $html .= '<h2>' . $title . '</h2>';
    $html .= '</div>';
    $html .= '</div>';
    return $html;
}
?>
