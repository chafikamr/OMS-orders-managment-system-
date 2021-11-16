<!-- include Header -->
<?php include('layout/header.php') ?>
<?php include('functions/connect.php') ?>


        <!-- Display All Orders -->
        <div class="grid_12">
            <div class="box round first fullpage grid">
                <h2>
                    Pending</h2>
                <div class="block">
                    <div class="dataTables_wrapper" id="example_wrapper">
                        <div class="dataTables_filter" id="example_filter"><input type="text" style="margin: 0 10px; " placeholder="Search With Number"><button class="btn btn-blue">GO</button></div>
                        <table class="data display datatable" id="example">
                            <thead>
                                <tr>
                                    <th class="sorting_asc" rowspan="1" colspan="1" style="width: 238px;">Order id</th>
                                    <th class="sorting" rowspan="1" colspan="1" style="width: 302px;">Client</th>
                                    <th class="sorting" rowspan="1" colspan="1" style="width: 285px;">Client Name</th>
                                    <th class="sorting" rowspan="1" colspan="1" style="width: 201px;">Client Number</th>
                                    <th class="sorting" rowspan="1" colspan="1" style="width: 143px;">Total Tax</th>
                                    <th class="sorting" rowspan="1" colspan="1" style="width: 143px;">Action</th>
                                </tr>
                            </thead>

                            <tbody>



                                <tr class="gradeA odd">
                                    <td class=" sorting_1">Mohamed </td>
                                    <td>0615280879</td>
                                    <td>130 DH</td>
                                    <td class="center">Casa</td>
                                    <td class="center">Smart watch</td>
                                    <td class="center">
                                        <a href="trait.html"> <button class="btn btn-black" style="line-height: normal; height: 20px; padding: 3px;">Traiter</button></a>
                                    </td>
                                </tr>
                                <tr class="gradeA odd">
                                    <td class=" sorting_1">Mohamed </td>
                                    <td>0615280879</td>
                                    <td>130 DH</td>
                                    <td class="center">Casa</td>
                                    <td class="center">Smart watch</td>
                                    <td class="center">
                                        <a href="trait.html"> <button class="btn btn-black" style="line-height: normal; height: 20px; padding: 3px;">Traiter</button></a>
                                    </td>
                                </tr>
                                <tr class="gradeA odd">
                                    <td class=" sorting_1">Mohamed </td>
                                    <td>0615280879</td>
                                    <td>130 DH</td>
                                    <td class="center">Casa</td>
                                    <td class="center">Smart watch</td>
                                    <td class="center">
                                        <a href="trait.html"> <button class="btn btn-black" style="line-height: normal; height: 20px; padding: 3px;">Traiter</button></a>
                                    </td>
                                </tr>
                                <tr class="gradeA odd">
                                    <td class=" sorting_1">Mohamed </td>
                                    <td>0615280879</td>
                                    <td>130 DH</td>
                                    <td class="center">Casa</td>
                                    <td class="center">Smart watch</td>
                                    <td class="center">
                                        <a href="trait.html"> <button class="btn btn-black" style="line-height: normal; height: 20px; padding: 3px;">Traiter</button></a>
                                    </td>
                                </tr>



                            </tbody>
                        </table>

                    </div>


                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>

    <!-- Include Footer -->
    <?php include('layout/footer.php') ?>