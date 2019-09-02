<?php
/**
 * @package    Joomla.Site
 * @subpackage Template.armytmpl
 *
 * @author     sharikov <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

require_once JPATH_THEMES . '/' . $this->template . '/helper.php';

tplArmytmplHelper::loadJs();
tplArmytmplHelper::setMetadata();

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <link rel="stylesheet" href="/templates/<?php echo $this->template;?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/templates/<?php echo $this->template;?>/css/template.css" />
</head>
<body class="<?php echo tplArmytmplHelper::setBodySuffix(); ?>">
<div class="container-fluid">
    <div class="container-fluid py-3 h-25">
        <header>
            <div class="row">
                <div class="col-md-2">
                    Logo
                </div>
                <div class="col-md-10 text-right gray py-3">
                    <div class="row">
                        <div class="col-11 text-right">
                            <figure class="figure">
                                <img src="/templates/<?php echo $this->template;?>/images/user.png" alt="User" class="switchers" />
                                <figcaption class="figure-caption text-right">
                                    <?php echo JFactory::getUser()->name;?>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-1">
                            <figure class="figure">
                                <img src="/templates/<?php echo $this->template;?>/images/lang/ru.png" alt="Language" class="switchers" />
                                <figcaption class="figure-caption text-right">
                                    Russian
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <header>
                    <nav role="navigation">
                        <jdoc:include type="modules" name="menu" style="none" />
                    </nav>
                </header>
            </div>
            <div class="col-md-10 gray p-3">
                <jdoc:include type="message" />
                <main>
                    <jdoc:include type="component" />
                </main>
            </div>
        </div>
    </div>
    <div class="container-fluid text-right">
        <jdoc:include type="modules" name="armytmplter" style="none" />
        &copy; <?php echo date('Y'); ?> <?php echo tplArmytmplHelper::getSitename(); ?>
    </div>
</div>
<jdoc:include type="modules" name="debug" style="none" />
</body>
<script type="text/javascript" src="/templates/<?php echo $this->template;?>/js/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript" src="/templates/<?php echo $this->template;?>/js/popper.min.js"></script>
<script type="text/javascript" src="/templates/<?php echo $this->template;?>/js/bootstrap.min.js"></script>
</html>
