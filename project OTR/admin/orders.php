<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div id="ordersBtn">
    <h2>Order Details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>O.N.</th>
                <th>Customer</th>
                <th>Contact</th>
                <th>OrderDate</th>
                <th>Payment Method</th>
                <th>Order Status</th>
                <th>Payment Status</th>
                <th>More Details</th>
            </tr>
        </thead>
        <?php
        include_once "./dp_connect.php"; // Include database connection
        $sql = "SELECT * from orders";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $row["order_id"] ?></td>
                    <td><?= $row["delivered_to"] ?></td>
                    <td><?= $row["phone_no"] ?></td>
                    <td><?= $row["order_date"] ?></td>
                    <td><?= $row["pay_method"] ?></td>
                    <?php if ($row["order_status"] == 0) { ?>
                        <td><button class="btn btn-danger" onclick="ChangeOrderStatus('<?= $row['order_id'] ?>')">Pending</button></td>
                    <?php } else { ?>
                        <td><button class="btn btn-success" onclick="ChangeOrderStatus('<?= $row['order_id'] ?>')">Booked</button></td>
                    <?php } ?>
                    <?php if ($row["pay_status"] == 0) { ?>
                        <td><button class="btn btn-danger" onclick="ChangePay('<?= $row['order_id'] ?>')">Unpaid</button></td>
                    <?php } else if ($row["pay_status"] == 1) { ?>
                        <td><button class="btn btn-success" onclick="ChangePay('<?= $row['order_id'] ?>')">Paid</button></td>
                    <?php } ?>
                    <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder.php?orderID=<?= $row['order_id'] ?>" href="javascript:void(0);">View</a></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Order Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="order-view-modal modal-body"></div>
        </div>
        <!--/ Modal content -->
    </div><!-- /Modal dialog -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Function to open view order modal
    $(document).ready(function () {
        $('.openPopup').on('click', function () {
            var dataURL = $(this).attr('data-href');
            $('.order-view-modal').load(dataURL, function () {
                $('#viewModal').modal({show: true});
            });
        });
    });

    // Function to change order status
    function ChangeOrderStatus(orderID) {
        // Implement your logic here
    }

    // Function to change payment status
    function ChangePay(orderID) {
        // Implement your logic here
    }
</script>

</body>
</html>
