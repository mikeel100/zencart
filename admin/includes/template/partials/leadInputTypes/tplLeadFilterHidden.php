<?php
/**
 * Admin Lead Template  - hidden partial
 *
 * @package templateSystem
 * @copyright Copyright 2003-2015 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:   New in v1.6.0 $
 */
?>
<input id="<?php echo $tplVars['pageDefinition']['fields'][$field]['field']; ?>"
       class="<?php echo $tplVars['pageDefinition']['action']; ?>LeadFilterInput"
       style="width:auto"
       type="hidden"
       name="<?php echo $tplVars['pageDefinition']['fields'][$field]['field']; ?>"
       value="<?php echo htmlspecialchars($tplVars['pageDefinition']['fields'][$field]['value']); ?>" size="<?php echo $tplVars['pageDefinition']['fields'][$field]['layout']['size']; ?>"
       >
