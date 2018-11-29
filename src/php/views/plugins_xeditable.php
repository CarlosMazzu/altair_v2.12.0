<?php defined('safe_access') or die('Restricted access!'); ?>

<div id="page_content">
    <div id="page_content_inner">

        <h3 class="heading_b uk-margin-bottom">X-editable</h3>
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-overflow-container">
                    <table id="user" class="uk-table uk-table-striped uk-text-nowrap">
                        <tbody>
                            <tr>
                                <td class="uk-width-1-3">Simple text field</td>
                                <td class="uk-width-2-3"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
                            </tr>
                            <tr>
                                <td>Empty text field, required</td>
                                <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
                            </tr>
                            <tr>
                                <td>Select, local array, custom display</td>
                                <td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
                            </tr>
                            <tr>
                                <td>Select, remote array, no buttons</td>
                                <td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group">Admin</a></td>
                            </tr>
                            <tr>
                                <td>Select, error while loading</td>
                                <td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
                            </tr>
                            <tr>
                                <td>Datepicker</td>
                                <td>
                                    <a href="#" id="vacation" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-title="When you want vacation to start?">25.02.2013</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Combodate (date)</td>
                                <td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
                            </tr>
                            <tr>
                                <td>Combodate (datetime)</td>
                                <td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-title="Setup event date and time"></a></td>
                            </tr>
                            <tr>
                                <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                                <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
                            </tr>
                            <tr>
                                <td>Checklist</td>
                                <td><a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a></td>
                            </tr>
                            <tr>
                                <td>Select2 (tags mode)</td>
                                <td><a href="#" id="tags" data-type="select2" data-pk="1" data-title="Enter tags">html, javascript</a></td>
                            </tr>
                            <tr>
                                <td>Select2 (dropdown mode)</td>
                                <td><a href="#" id="country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a></td>
                            </tr>
                            <tr>
                                <td>Custom input, several fields</td>
                                <td><a href="#" id="address" data-type="address" data-pk="1" data-title="Please, fill address"></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>