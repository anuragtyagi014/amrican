<?php

namespace OXI_TABS_PLUGINS\Admin_Render;

/**
 * Description of Style1
 *
 * @author biplo
 */
use OXI_TABS_PLUGINS\Page\Admin_Render;

class Style1 extends Admin_Render {

    public function clild() {
        $title = sanitize_text_field(htmlentities($_POST['ctu-title']));
        $title .= '{}{}{}';
        $title .= $this->admin_special_charecter($_POST['ctu-link']);
        $details = sanitize_text_field(htmlentities($_POST['ctu-details']));
        $css = '';
        return ['title' => $title, 'files' => $details, 'css' => $css];
    }

    public function style() {
        $data = 'heading-font-size |' . sanitize_text_field($_POST['heading-font-size']) . '|'
                . ' heading-font-color |' . sanitize_text_field($_POST['heading-font-color']) . '|'
                . ' heading-background-color |' . sanitize_text_field($_POST['heading-background-color']) . '|'
                . ' heading-font-active-color |' . sanitize_text_field($_POST['heading-font-active-color']) . '|'
                . ' heading-background-active-color |' . sanitize_text_field($_POST['heading-background-active-color']) . '|'
                . ' heading-font-familly |' . sanitize_text_field($_POST['heading-font-familly']) . '|'
                . ' heading-font-weight |' . sanitize_text_field($_POST['heading-font-weight']) . '|'
                . ' heading-text-align |' . sanitize_text_field($_POST['heading-text-align']) . '|'
                . ' heading-width |' . sanitize_text_field($_POST['heading-width']) . '|'
                . ' heading-padding |' . sanitize_text_field($_POST['heading-padding']) . '|'
                . ' heading-Border-radius |' . sanitize_text_field($_POST['heading-Border-radius']) . '|'
                . ' heading-box-shadow-Blur |' . sanitize_text_field($_POST['heading-box-shadow-Blur']) . '|'
                . ' heading-box-shadow-color |' . sanitize_text_field($_POST['heading-box-shadow-color']) . '|'
                . ' content-font-size |' . sanitize_text_field($_POST['content-font-size']) . '|'
                . ' content-font-color |' . sanitize_text_field($_POST['content-font-color']) . '|'
                . ' content-background-color |' . sanitize_text_field($_POST['content-background-color']) . '|'
                . ' content-padding-top |' . sanitize_text_field($_POST['content-padding-top']) . '|'
                . ' content-padding-right |' . sanitize_text_field($_POST['content-padding-right']) . '|'
                . ' content-padding-bottom |' . sanitize_text_field($_POST['content-padding-bottom']) . '|'
                . ' content-padding-left |' . sanitize_text_field($_POST['content-padding-left']) . '|'
                . ' content-line-height |' . sanitize_text_field($_POST['content-line-height']) . '|'
                . ' content-font-familly |' . sanitize_text_field($_POST['content-font-familly']) . '|'
                . ' content-font-weight |' . sanitize_text_field($_POST['content-font-weight']) . '|'
                . ' content-font-align |' . sanitize_text_field($_POST['content-font-align']) . '|'
                . ' content-box-shadow-Blur |' . sanitize_text_field($_POST['content-box-shadow-Blur']) . '|'
                . ' content-box-shadow-color |' . sanitize_text_field($_POST['content-box-shadow-color']) . '|'
                . ' heading-border-top |' . sanitize_text_field($_POST['heading-border-top']) . '|'
                . ' heading-margin-bottom |' . sanitize_text_field($_POST['heading-margin-bottom']) . '|'
                . ' heading-box-shadow-Horizontal |' . sanitize_text_field($_POST['heading-box-shadow-Horizontal']) . '|'
                . ' heading-box-shadow-Vertical |' . sanitize_text_field($_POST['heading-box-shadow-Vertical']) . '|'
                . ' heading-box-shadow-Spread |' . sanitize_text_field($_POST['heading-box-shadow-Spread']) . '|'
                . ' content-box-shadow-Horizontal |' . sanitize_text_field($_POST['content-box-shadow-Horizontal']) . '|'
                . ' content-box-shadow-Vertical |' . sanitize_text_field($_POST['content-box-shadow-Vertical']) . '|'
                . ' content-box-shadow-Spread |' . sanitize_text_field($_POST['content-box-shadow-Spread']) . '|'
                . ' custom-css |' . $_POST['custom-css'] . '|'
                . ' oxi-tabs-opening |' . sanitize_text_field($_POST['oxi-tabs-opening']) . '|'
                . ' oxi-tabs-animation |' . sanitize_text_field($_POST['oxi-tabs-animation']) . '|'
                . ' tabs-link-options |' . sanitize_text_field($_POST['tabs-link-options']) . '|';

        return $data;
    }

    public function admin_field($styledata) {
        $styleid = $this->styleid;
        if (empty($styledata[71])) {
            $styledata[71] = ':eq(1)';
        }
        if (empty($styledata[73])) {
            $styledata[73] = 'slide';
        }
        if (empty($styledata[75])) {
            $styledata[75] = '';
        }
        ?>

        <div class="oxi-addons-tabs-content-tabs" id="oxilab-tabs-id-4">
            <div class="oxi-addons-col-6">
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Initial Opening
                    </div>

                    <div class="form-group row form-group-sm">
                        <label for="oxi-tabs-opening" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Set Which tabs You want to Open Initial" >Initial Opening </label>
                        <div class="col-sm-6">
                            <select class="form-control" id="oxi-tabs-opening" name="oxi-tabs-opening">
                                <option value=":eq(0)"     <?php
                                if ($styledata[71] == ':eq(0)') {
                                    echo 'selected';
                                };
                                ?>>First</option>
                                <option value=":eq(1)"     <?php
                                if ($styledata[71] == ':eq(1)') {
                                    echo 'selected';
                                };
                                ?>>2nd</option>
                                <option value=":eq(2)"     <?php
                                if ($styledata[71] == ':eq(2)') {
                                    echo 'selected';
                                };
                                ?>>3rd</option>
                                <option value=":eq(3)"     <?php
                                if ($styledata[71] == ':eq(3)') {
                                    echo 'selected';
                                };
                                ?>>4th</option>
                                <option value=":eq(4)"     <?php
                                if ($styledata[71] == ':eq(4)') {
                                    echo 'selected';
                                };
                                ?>>5th</option>
                                <option value=":eq(5)"     <?php
                                if ($styledata[71] == ':eq(5)') {
                                    echo 'selected';
                                };
                                ?>>6th</option>
                                <option value=":eq(6)"     <?php
                                if ($styledata[71] == ':eq(6)') {
                                    echo 'selected';
                                };
                                ?>>7th</option>
                                <option value=":eq(7)"     <?php
                                if ($styledata[71] == ':eq(7)') {
                                    echo 'selected';
                                };
                                ?>>8th</option>
                                <option value=":eq(8)"     <?php
                                if ($styledata[71] == ':eq(8)') {
                                    echo 'selected';
                                };
                                ?>>9th</option>
                                <option value=":eq(9)" <?php
                                if ($styledata[71] == ':eq(9)') {
                                    echo 'selected';
                                };
                                ?>>10th</option>
                                <option value=":eq(109)"    <?php
                                if ($styledata[71] == ':eq(109)') {
                                    echo 'selected';
                                };
                                ?>>None</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="oxi-tabs-animation" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Set Tabs Changing Animation" >Tabbing Animation </label>
                        <div class="col-sm-6">
                            <select class="form-control" id="oxi-tabs-opening" name="oxi-tabs-animation">
                                <option value="show"<?php
                                if ($styledata[73] == 'show') {
                                    echo 'selected';
                                };
                                ?>>No Animation</option>
                                <option value="fade"<?php
                                if ($styledata[73] == 'fade') {
                                    echo 'selected';
                                };
                                ?>>Fade</option>
                                <option value="slide"     <?php
                                if ($styledata[73] == 'slide') {
                                    echo 'selected';
                                };
                                ?>>Slide</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="oxi-tabs-link" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Set Tabs Link Opening" >Link Opening</label>
                        <div class="col-sm-6">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary  <?php
                                if ($styledata[75] == 'new-tab') {
                                    echo 'active';
                                };
                                ?>" >
                                    <input type="radio" <?php
                                    if ($styledata[75] == 'new-tab') {
                                        echo 'checked';
                                    };
                                    ?> name="tabs-link-options" id="link-options1" value="new-tab"> New Tab
                                </label>
                                <label class="btn btn-primary <?php
                                if ($styledata[75] != 'new-tab') {
                                    echo 'active';
                                };
                                ?>">
                                    <input type="radio" <?php
                                    if ($styledata[75] != 'new-tab') {
                                        echo 'checked';
                                    };
                                    ?> name="tabs-link-options" id="link-options2"> Same Tab
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Font Settings
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-font-size" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Title Font Size, Based on Pixel ">Font Size </label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" value="<?php echo $styledata[1]; ?>" id="heading-font-size" name="heading-font-size">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-font-color" class="col-sm-6 control-label heading-font-color" data-toggle="tooltip" data-placement="top" title="Set Your Title Font Color, Based on Color" >Color</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control oxilab-vendor-color" id="heading-font-color" name="heading-font-color" value="<?php echo$styledata[3]; ?>" oxivalue="<?php echo$styledata[3]; ?>">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-background-color" class="col-sm-6 control-label heading-background-color" data-toggle="tooltip" data-placement="top" title="Set Your Title background Color, Based on Color">Background </label>
                        <div class="col-sm-6">
                            <input type="text"  data-format="rgb" data-opacity="true"  class="form-control oxilab-vendor-color" id="heading-background-color" name="heading-background-color" value="<?php echo $styledata[5]; ?>" oxivalue="<?php echo $styledata[5]; ?>">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-font-active-color" class="col-sm-6 control-label heading-font-active-color" data-toggle="tooltip" data-placement="top" title="Customize Yout Active Title Font Color, Based on Color">Color Active</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control oxilab-vendor-color" id="heading-font-active-color" name="heading-font-active-color" value="<?php echo $styledata[7]; ?>" oxivalue="<?php echo $styledata[7]; ?>">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-background-active-color" class="col-sm-6 control-label heading-background-active-color" data-toggle="tooltip" data-placement="top" title="Set Your Active Title Background Color, Based on Color">Background Active </label>
                        <div class="col-sm-6">
                            <input type="text" data-format="rgb" data-opacity="true"  class="form-control oxilab-vendor-color" id="heading-background-active-color" name="heading-background-active-color" value="<?php echo $styledata[9]; ?>" oxivalue="<?php echo $styledata[9]; ?>">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-font-familly" class="col-sm-6 col-form-label heading-font-familly" data-toggle="tooltip" data-placement="top" title="Choose Your Title Preferred font, Based on Google Font"> Font Family </label>
                        <div class="col-sm-6">
                            <input class="oxi-admin-font" type="text" name="heading-font-familly" id="heading-font-familly" value="<?php echo $styledata[11]; ?>" oxivalue="<?php echo $styledata[11]; ?>">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Title Font Weight, Based on CSS Weight" >Font Weight </label>
                        <div class="col-sm-6">
                            <select class="form-control" id="heading-font-weight" name="heading-font-weight">
                                <option value="100"     <?php
                                if ($styledata[13] == '100') {
                                    echo 'selected';
                                };
                                ?>>100</option>
                                <option value="200"     <?php
                                if ($styledata[13] == '200') {
                                    echo 'selected';
                                };
                                ?>>200</option>
                                <option value="300"     <?php
                                if ($styledata[13] == '300') {
                                    echo 'selected';
                                };
                                ?>>300</option>
                                <option value="400"     <?php
                                if ($styledata[13] == '400') {
                                    echo 'selected';
                                };
                                ?>>400</option>
                                <option value="500"     <?php
                                if ($styledata[13] == '500') {
                                    echo 'selected';
                                };
                                ?>>500</option>
                                <option value="600"     <?php
                                if ($styledata[13] == '600') {
                                    echo 'selected';
                                };
                                ?>>600</option>
                                <option value="700"     <?php
                                if ($styledata[13] == '700') {
                                    echo 'selected';
                                };
                                ?>>700</option>
                                <option value="800"     <?php
                                if ($styledata[13] == '800') {
                                    echo 'selected';
                                };
                                ?>>800</option>
                                <option value="900"     <?php
                                if ($styledata[13] == '900') {
                                    echo 'selected';
                                };
                                ?>>900</option>
                                <option value="normal" <?php
                                if ($styledata[13] == 'normal') {
                                    echo 'selected';
                                };
                                ?>>Normal</option>
                                <option value="bold"    <?php
                                if ($styledata[13] == 'bold') {
                                    echo 'selected';
                                };
                                ?>>Bold</option>
                                <option value="lighter" <?php
                                if ($styledata[13] == 'lighter') {
                                    echo 'selected';
                                };
                                ?>>Lighter</option>
                                <option value="initial"   <?php
                                if ($styledata[13] == 'initial') {
                                    echo 'selected';
                                };
                                ?>>Initial</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="oxi-addons-col-6">
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Body Settings
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-text-align" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Set Your Title Position">Heading Align </label>
                        <div class="col-sm-6">
                            <select class="form-control" id="heading-text-align" name="heading-text-align">
                                <option value="flex-start"     <?php
                                if ($styledata[15] == 'flex-start') {
                                    echo 'selected';
                                };
                                ?>>Left</option>
                                <option value="center"     <?php
                                if ($styledata[15] == 'center') {
                                    echo 'selected';
                                };
                                ?>>Center</option>
                                <option value="flex-end"     <?php
                                if ($styledata[15] == 'flex-end') {
                                    echo 'selected';
                                };
                                ?>>Right</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-width" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Set Your Title Background Width, Based on Pixel ">Width </label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" value="<?php echo $styledata[17]; ?>" id="heading-width" name="heading-width">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-padding" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Use Padding to generate space around Title, Based on Pixel ">Padding </label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" value="<?php echo $styledata[19]; ?>" id="heading-padding" name="heading-padding">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-Border-radius" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Add Rounded Corner on Up Side, Based on Pixel ">Border Radius </label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" value="<?php echo $styledata[21]; ?>" id="heading-Border-radius" name="heading-Border-radius">
                        </div>
                    </div>      
                    <div class="form-group row form-group-sm">
                        <label for="heading-border-top" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Generate Border Sizeof Heading, Based on Pixel ">Top Border</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" value="<?php echo $styledata[53]; ?>" id="heading-border-top" name="heading-border-top">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-margin-bottom" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Generate Custom Space Between Title Box and Content Box, Based on Pixel ">Margin Bottom</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" value="<?php echo $styledata[55]; ?>" id="heading-margin-bottom" name="heading-margin-bottom">
                        </div>
                    </div>
                </div>
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Box Shadow
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-box-shadow-Horizontal" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Attach Shadow Horizontal Vertical on Title box, Based on Pixel ">Box Shadow Length</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[57]; ?>" id="heading-box-shadow-Horizontal" name="heading-box-shadow-Horizontal">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[59]; ?>" id="heading-box-shadow-Vertical" name="heading-box-shadow-Vertical">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-box-shadow-Blur" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Attach Shadow Blur and Spread on Title box, Based on Pixel ">Blur and Spread Radius</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[23]; ?>" id="heading-box-shadow-Blur" name="heading-box-shadow-Blur">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[61]; ?>" id="heading-box-shadow-Spread" name="heading-box-shadow-Spread">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="heading-box-shadow-color" class="col-sm-6 control-label heading-box-shadow-color" data-toggle="tooltip" data-placement="top" title="Add Shadow Color to Title Box, Based on Color">Box Shadow Color </label>
                        <div class="col-sm-6">
                            <input type="text"  data-format="rgb" data-opacity="true" class="form-control oxilab-vendor-color" id="heading-box-shadow-color" name="heading-box-shadow-color" value="<?php echo $styledata[25]; ?>" oxivalue="<?php echo $styledata[25]; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxi-addons-tabs-content-tabs" id="oxilab-tabs-id-3">
            <div class="oxi-addons-col-6">
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Font Settings
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-font-size" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Content Font Size, Based on Pixel ">Font Size </label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" value="<?php echo $styledata[27]; ?>" id="content-font-size" name="content-font-size">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-font-color" class="col-sm-6 control-label content-font-color" data-toggle="tooltip" data-placement="top" title="Set Custom Content Font Color, Based on Color">Color </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control oxilab-vendor-color" id="content-font-color" name="content-font-color" value="<?php echo $styledata[29]; ?>" oxivalue="<?php echo $styledata[29]; ?>">
                        </div>
                    </div>                                               
                    <div class="form-group row form-group-sm">
                        <label for="content-line-height" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Content Font Line Height, Based on Point">Line Height</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" step="0.1" value="<?php echo $styledata[41]; ?>" id="content-line-height" name="content-line-height">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-font-familly" class="col-sm-6 col-form-label content-font-familly" data-toggle="tooltip" data-placement="top" title="Choose Your Content Font, Based on Google Font"> Font Family </label>
                        <div class="col-sm-6">
                            <input class="oxi-admin-font" value="<?php echo $styledata[43]; ?>" oxivalue="<?php echo $styledata[43]; ?>" type="text" name="content-font-familly" id="content-font-familly">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Content Font Weight, Based on Pixel ">Font Weight  </label>
                        <div class="col-sm-6">
                            <select class="form-control" id="content-font-weight" name="content-font-weight">
                                <option value="100" <?php
                                if ($styledata[45] == '100') {
                                    echo 'selected';
                                };
                                ?>>100</option>
                                <option value="200" <?php
                                if ($styledata[45] == '200') {
                                    echo 'selected';
                                };
                                ?>>200</option>
                                <option value="300" <?php
                                if ($styledata[45] == '300') {
                                    echo 'selected';
                                };
                                ?>>300</option>
                                <option value="400" <?php
                                if ($styledata[45] == '400') {
                                    echo 'selected';
                                };
                                ?>>400</option>
                                <option value="500" <?php
                                if ($styledata[45] == '500') {
                                    echo 'selected';
                                };
                                ?>>500</option>
                                <option value="600" <?php
                                if ($styledata[45] == '600') {
                                    echo 'selected';
                                };
                                ?>>600</option>
                                <option value="700" <?php
                                if ($styledata[45] == '700') {
                                    echo 'selected';
                                };
                                ?>>700</option>
                                <option value="800" <?php
                                if ($styledata[45] == '800') {
                                    echo 'selected';
                                };
                                ?>>800</option>
                                <option value="900" <?php
                                if ($styledata[45] == '900') {
                                    echo 'selected';
                                };
                                ?>>900</option>
                                <option value="normal" <?php
                                if ($styledata[45] == 'normal') {
                                    echo 'selected';
                                };
                                ?>>Normal</option>
                                <option value="bold" <?php
                                if ($styledata[45] == 'bold') {
                                    echo 'selected';
                                };
                                ?>>Bold</option>
                                <option value="lighter" <?php
                                if ($styledata[37] == 'lighter') {
                                    echo 'selected';
                                };
                                ?>>Lighter</option>
                                <option value="initial" <?php
                                if ($styledata[45] == 'initial') {
                                    echo 'selected';
                                };
                                ?>>Initial</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-font-align" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Set Content Text Position, Based on left or center or Right">Text Align  </label>
                        <div class="col-sm-6">
                            <select class="form-control" id="content-font-align" name="content-font-align">
                                <option value="left" <?php
                                if ($styledata[47] == '100') {
                                    echo 'selected';
                                };
                                ?>>Left</option>
                                <option value="center" <?php
                                if ($styledata[47] == '100') {
                                    echo 'selected';
                                };
                                ?>>Center</option>
                                <option value="right" <?php
                                if ($styledata[47] == '100') {
                                    echo 'selected';
                                };
                                ?>>Right</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="oxi-addons-col-6">
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Body Settings
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-background-color" class="col-sm-6 control-label content-background-color" data-toggle="tooltip" data-placement="top" title="Set Custom Background Color of Content Box">Background Color </label>
                        <div class="col-sm-6">
                            <input type="text" data-format="rgb" data-opacity="true"  class="form-control oxilab-vendor-color" id="content-background-color" name="content-background-color" value="<?php echo $styledata[31]; ?>" oxivalue="<?php echo $styledata[31]; ?>">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-padding-top" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Use Padding to Generate Space Around Content as top,  bottom. Based on Pixel ">Padding Top Bottom </label>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[33]; ?>" id="content-padding-top" name="content-padding-top">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[37]; ?>" id="content-padding-bottom" name="content-padding-bottom">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-padding" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Use Padding to Generate Space Around Content as left right. Based on Pixel ">Padding Left Right</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[39]; ?>" id="content-padding-left" name="content-padding-left">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[35]; ?>" id="content-padding-right" name="content-padding-right">
                        </div>
                    </div>                                               
                </div>
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Box Shadow
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-box-shadow" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Attach Shadow Length to Content Box, Based on Pixel ">Box Shadow Length</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[63]; ?>" id="content-box-shadow-Horizontal" name="content-box-shadow-Horizontal">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[65]; ?>" id="content-box-shadow-Vertical" name="content-box-shadow-Vertical">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-box-shadow" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Attach Shadow Spread to Content Box, Based on Pixel ">Blur and Spread Radius </label>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[49]; ?>" id="content-box-shadow-Blur" name="content-box-shadow-Blur">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?php echo $styledata[67]; ?>" id="content-box-shadow-Spread" name="content-box-shadow-Spread">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="content-box-shadow-color" class="col-sm-6 control-label content-box-shadow-color" data-toggle="tooltip" data-placement="top" title="Add custom Shadow Collor to Content Box">Box Shadow Color </label>
                        <div class="col-sm-6">
                            <input data-format="rgb" data-opacity="true"  type="text" class="form-control oxilab-vendor-color" id="content-box-shadow-color" name="content-box-shadow-color" value="<?php echo $styledata[51]; ?>" oxivalue="<?php echo $styledata[51]; ?>">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="oxi-addons-tabs-content-tabs" id="oxilab-tabs-id-2">
            <div class="oxi-addons-content-div col-xs-12">
                <div class="form-group">
                    <label for="custom-css" class="custom-css">Custom CSS:</label>
                    <textarea class="form-control" rows="4" id="custom-css" name="custom-css"><?php echo $styledata[69]; ?></textarea>
                    <small class="form-text text-muted">Add Your Custom CSS Unless make it blank.</small>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery(".oxilab-tabs-ul li:first").addClass("active");
                jQuery(".oxi-addons-tabs-content-tabs:first").addClass("active");
                jQuery(".oxilab-tabs-ul li").click(function () {
                    jQuery(".oxilab-tabs-ul li").removeClass("active");
                    jQuery(this).toggleClass("active");
                    jQuery(".oxi-addons-tabs-content-tabs").removeClass("active");
                    var activeTab = jQuery(this).attr("ref");
                    jQuery(activeTab).addClass("active");
                });
                jQuery("#heading-font-size").on("change", function () {
                    jQuery("<style type='text/css'> #oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li{font-size: " + jQuery("#heading-font-size").val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ultimate-style-heading-<?php echo $styleid; ?>{font-size: " + jQuery("#heading-font-size").val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-font-color").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ultimate-style-heading-<?php echo $styleid; ?>{color: " + jQuery("#heading-font-color").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li{color: " + jQuery("#heading-font-color").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-background-color").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{background-color: " + jQuery("#heading-background-color").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ultimate-style-heading-<?php echo $styleid; ?>{background-color: " + jQuery("#heading-background-color").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-font-active-color").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li.active{color: " + jQuery("#heading-font-active-color").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{color: " + jQuery("#heading-font-active-color").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-background-active-color").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{ border-top: " + jQuery("#heading-border-top").val() + "px solid " + jQuery("#heading-background-active-color").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li{border-right: " + jQuery("#heading-background-active-color").val() + "1px solid; } </style>").appendTo("#oxi-addons-preview-data");
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li.active{background-color: " + jQuery("#heading-background-active-color").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{background-color: " + jQuery("#heading-background-active-color").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery('#heading-font-familly').change(function () {
                    var font = jQuery(this).val().replace(/\+/g, ' ');
                    font = font.split(':');
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li{ font-family:" + font[0] + ";} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-font-weight").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li{font-weight: " + jQuery("#heading-font-weight").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ultimate-style-heading-<?php echo $styleid; ?>{font-weight: " + jQuery("#heading-font-weight").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-text-align").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{justify-content: " + jQuery("#heading-text-align").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-width").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li{width: " + jQuery("#heading-width").val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-padding").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li{padding: " + jQuery("#heading-padding").val() + "px 10px; } </style>").appendTo("#oxi-addons-preview-data");
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ultimate-style-heading-<?php echo $styleid; ?>{padding: " + jQuery("#heading-padding").val() + "px 10px; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-Border-radius").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{border-radius: " + jQuery("#heading-Border-radius").val() + "px " + jQuery("#heading-Border-radius").val() + "px 0 0; } </style>").appendTo("#oxi-addons-preview-data");
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ultimate-style-heading-<?php echo $styleid; ?>{border-radius: " + jQuery("#heading-Border-radius").val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-border-top").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{ border-top: " + jQuery("#heading-border-top").val() + "px solid " + jQuery("#heading-background-active-color").val() + "; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-margin-bottom").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{margin-bottom: " + jQuery("#heading-margin-bottom").val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#heading-box-shadow-Horizontal").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{box-shadow:" + jQuery('#heading-box-shadow-Horizontal').val() + "px " + jQuery('#heading-box-shadow-Vertical').val() + "px " + jQuery('#heading-box-shadow-Blur').val() + "px " + jQuery('#heading-box-shadow-Spread').val() + "px " + jQuery('#heading-box-shadow-color').val() + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
                jQuery("#heading-box-shadow-Vertical").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{box-shadow:" + jQuery('#heading-box-shadow-Horizontal').val() + "px " + jQuery('#heading-box-shadow-Vertical').val() + "px " + jQuery('#heading-box-shadow-Blur').val() + "px " + jQuery('#heading-box-shadow-Spread').val() + "px " + jQuery('#heading-box-shadow-color').val() + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
                jQuery("#heading-box-shadow-Blur").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{box-shadow:" + jQuery('#heading-box-shadow-Horizontal').val() + "px " + jQuery('#heading-box-shadow-Vertical').val() + "px " + jQuery('#heading-box-shadow-Blur').val() + "px " + jQuery('#heading-box-shadow-Spread').val() + "px " + jQuery('#heading-box-shadow-color').val() + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
                jQuery("#heading-box-shadow-Spread").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{box-shadow:" + jQuery('#heading-box-shadow-Horizontal').val() + "px " + jQuery('#heading-box-shadow-Vertical').val() + "px " + jQuery('#heading-box-shadow-Blur').val() + "px " + jQuery('#heading-box-shadow-Spread').val() + "px " + jQuery('#heading-box-shadow-color').val() + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
                jQuery("#heading-box-shadow-color").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulimate-style-<?php echo $styleid; ?>{box-shadow:" + jQuery('#heading-box-shadow-Horizontal').val() + "px " + jQuery('#heading-box-shadow-Vertical').val() + "px " + jQuery('#heading-box-shadow-Blur').val() + "px " + jQuery('#heading-box-shadow-Spread').val() + "px " + jQuery('#heading-box-shadow-color').val() + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
                jQuery("#content-font-size").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs p{font-size: " + jQuery("#content-font-size").val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#content-font-color").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs p{color: " + jQuery("#content-font-color").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#content-line-height").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs p{line-height: " + jQuery("#content-line-height").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery('#content-font-familly').change(function () {
                    var font = jQuery(this).val().replace(/\+/g, ' ');
                    font = font.split(':');
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs p{ font-family:" + font[0] + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
                jQuery("#content-font-weight").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs p{font-weight: " + jQuery("#content-font-weight").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#content-font-align").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs p{text-align: " + jQuery("#content-font-align").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#content-background-color").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{background-color: " + jQuery("#content-background-color").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#content-padding-top").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{padding: " + jQuery("#content-padding-top").val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#content-padding-bottom").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{padding: " + jQuery("#content-padding-bottom").val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#content-padding-left").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{padding: " + jQuery("#content-padding-left").val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#content-padding-right").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{padding: " + jQuery("#content-padding-right").val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
                });
                jQuery("#content-box-shadow-Horizontal").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{box-shadow:" + jQuery('#content-box-shadow-Horizontal').val() + "px " + jQuery('#content-box-shadow-Vertical').val() + "px " + jQuery('#content-box-shadow-Blur').val() + "px " + jQuery('#content-box-shadow-Spread').val() + "px " + jQuery('#content-box-shadow-color').val() + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
                jQuery("#content-box-shadow-Vertical").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{box-shadow:" + jQuery('#content-box-shadow-Horizontal').val() + "px " + jQuery('#content-box-shadow-Vertical').val() + "px " + jQuery('#content-box-shadow-Blur').val() + "px " + jQuery('#content-box-shadow-Spread').val() + "px " + jQuery('#content-box-shadow-color').val() + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
                jQuery("#content-box-shadow-Blur").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{box-shadow:" + jQuery('#content-box-shadow-Horizontal').val() + "px " + jQuery('#content-box-shadow-Vertical').val() + "px " + jQuery('#content-box-shadow-Blur').val() + "px " + jQuery('#content-box-shadow-Spread').val() + "px " + jQuery('#content-box-shadow-color').val() + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
                jQuery("#content-box-shadow-Spread").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{box-shadow:" + jQuery('#content-box-shadow-Horizontal').val() + "px " + jQuery('#content-box-shadow-Vertical').val() + "px " + jQuery('#content-box-shadow-Blur').val() + "px " + jQuery('#content-box-shadow-Spread').val() + "px " + jQuery('#content-box-shadow-color').val() + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
                jQuery("#content-box-shadow-color").on("change", function () {
                    jQuery("<style type='text/css'>#oxi-addons-preview-data .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{box-shadow:" + jQuery('#content-box-shadow-Horizontal').val() + "px " + jQuery('#content-box-shadow-Vertical').val() + "px " + jQuery('#content-box-shadow-Blur').val() + "px " + jQuery('#content-box-shadow-Spread').val() + "px " + jQuery('#content-box-shadow-color').val() + ";} </style>").appendTo(".ctu-ultimate-wrapper");
                });
            });
        </script>
        <?php
    }

    public function admin_child_field() {
        ?>
        <div class="form-group col-sm-12">
            <label for="ctu-title"  data-toggle="tooltip" data-placement="top">Title</label>
            <input type="text "class="form-control" id="cau-title" name="ctu-title" value="<?php echo $this->title; ?>">
            <small class="form-text text-muted">Add or Modify Your Tabs Title.</small>
        </div>
        <div class="form-group col-sm-12">
            <label for="ctu-link"  data-toggle="tooltip" data-placement="top">Link</label>
            <input type="text "class="form-control" id="ctu-link" name="ctu-link" value="<?php echo $this->link; ?>">
            <small class="form-text text-muted">As you want to add link. Unless make it blank. Link will works only at site not edit page</small>
        </div>
        <div class="form-group col-sm-12">
            <label for="ctu-details">Details:</label>
            <?php
            wp_editor($this->admin_special_charecter($this->files), 'ctu-details', $settings = array(
                'textarea_name' => 'ctu-details',
                'wpautop' => false,
                'force_br_newlines' => true,
                'force_p_newlines' => false)
            );
            ?>
            <small class="form-text text-muted">Add or Modify Your Content.</small>
        </div>
        <?php
    }

    public function admin_child_rearrange() {
        echo ' <ul class="list-group col-sm-12" id="oxi-addons-drag-drop">';
        foreach ($this->child as $value) {
            $titlefiles = explode('{}{}{}', $value['title']);
            echo '<li class="list-group-item" id ="' . $value['id'] . '">' . $titlefiles[0] . '</li>';
        }
        echo '</ul>';
    }

}
