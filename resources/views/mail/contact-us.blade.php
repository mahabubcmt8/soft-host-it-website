<!DOCTYPE html>
<html>
<head>
    <title>বিহিসাব এর নতুন Contact US মেসেজ </title>
    <style>
        .email-container {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .header, .footer {
            background-color: #424141;
            padding: 20px;
            text-align: center;
            color: #fff;
        }
        .content {
            padding: 20px;
        }
        .order-details {
            margin: 20px 0;
        }
        .order-details th, .order-details td {
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="content">
            <table class="order-details">
                <tr>
                    <th>নাম</th>
                    <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <th>ফোন</th>
                    <td>{{ $data->phone }}</td>
                </tr>
                <tr>
                    <th>ইমেইল</th>
                    <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <th>ঠিকানা</th>
                    <td>{{ $data->address }}</td>
                </tr>
                <tr>
                    <th>মেসেজ</th>
                    <td>{{ $data->message }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
