<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire Panel Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #333;
        }
        .status-container {
            margin-top: 20px;
            font-size: 18px;
        }
        .zone-status {
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
            width: 200px;
            text-align: left;
            cursor: pointer;
        }
        .zone-status span {
            font-weight: bold;
        }
        .no-updates {
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Fire Panel Status</h1>
    <div class="status-container">
        <div class="zone-status" id="zone1" onclick="getZoneStatus('Zone 1')">
            <span>Zone 1:</span> <span class="status">No updates</span>
        </div>
        <div class="zone-status" id="zone2" onclick="getZoneStatus('Zone 2')">
            <span>Zone 2:</span> <span class="status">No updates</span>
        </div>
    </div>

<script>
    // Function to fetch and update zone statuses
    function fetchZoneStatuses() {
        fetch('fetch_status.php') // Fetch data from the PHP script
            .then(response => response.json())
            .then(data => {
                // Clear previous statuses
                document.getElementById('zone1').querySelector('.status').innerText = "No updates";
                document.getElementById('zone2').querySelector('.status').innerText = "No updates";

                // Update zones with "Fire" status
                if (data["Zone 1"] === "Fire") {
                    document.getElementById('zone1').querySelector('.status').innerText = "Fire";
                }
                if (data["Zone 2"] === "Fire") {
                    document.getElementById('zone2').querySelector('.status').innerText = "Fire";
                }

                // If no zones are on fire, display a message
                if (data.message) {
                    console.log(data.message);
                }
            })
            .catch(error => {
                console.error("Error fetching status:", error);
            });
    }

    // Fetch statuses when the page loads
    fetchZoneStatuses();

    // Refresh statuses every 5 seconds
    setInterval(fetchZoneStatuses, 1000); // Polling interval
</script>
</body>
</html>