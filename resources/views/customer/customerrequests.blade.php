<!-- resources/views/customer/requests.blade.php -->
<x-app-layout>
    <h1>Your Requests</h1>
    <p>Here are the requests you have made:</p>
    <table>
        <thead>
            <tr>
                <th>Request ID</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Request for service installation</td>
                <td>In Progress</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Technical support needed</td>
                <td>Completed</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Billing issue</td>
                <td>Pending</td>
            </tr>
        </tbody>
    </table>
</x-app-layout>
