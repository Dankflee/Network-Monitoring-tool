<?php
$a = $_POST["Fields"];
$b = $_POST["Protocols"];
if($b == "arp")
{
if($a == "timestamp")
{
	echo '<table border = "1">';
	echo "<tr>
		<th>Timestamp_ARP</th>
	     </tr>";	
	$file = fopen("timestamp_arp","r");
	while (! feof($file))
	{
		echo "<tr><td>" .fgets($file)."</td></tr>";
	}

	echo "</table>";
	fclose($file);
}
else if($a == "s_mac")
{
	echo '<table border = "1">';
	echo "<tr>
		<th>Sourcemac_ARP</th>
	     </tr>";
	$file = fopen("sourcemac_arp","r");
	while (! feof($file))
	{
		echo "<tr><td>" .fgets($file)."</td></tr>";
	}

	echo "</table>";
	fclose($file);
}
else if($a == "d_mac")
{
	echo '<table border = "1">';
	echo "<tr>
		<th>Destinationmac_ARP</th>
	     </tr>";
	$file = fopen("destinationmac_arp","r");
	while (! feof($file))
	{
		echo "<tr><td>" .fgets($file)."</td></tr>";
	}

	echo "</table>";
	fclose($file);
}
else if($a == "s_ip")
{
	echo '<table border = "1">';
	echo "<tr>
		<th>Sourceip_ARP</th>
	     </tr>";
	$file = fopen("sourceip_arp","r");
	while (! feof($file))
	{
		echo "<tr><td>" .fgets($file)."</td></tr>";
	}

	echo "</table>";
	fclose($file);
}
else if($a == "d_ip")
{
	echo '<table border = "1">';
	echo "<tr>
		<th>Destinationip_ARP</th>
	     </tr>";
	$file = fopen("destinationip_arp","r");
	while (! feof($file))
	{
		echo "<tr><td>" .fgets($file)."</td></tr>";
	}

	echo "</table>";
	fclose($file);
}
else if($a == "plength")
{
	echo '<table border = "1">';
	echo "<tr>
		<th>Plength_ARP</th>
	     </tr>";
	$file = fopen("plength_arp","r");
	while (! feof($file))
	{
		echo "<tr><td>" .fgets($file)."</td></tr>";
	}

	echo "</table>";
	fclose($file);
}
else
{
	echo '<table border = "1">';
	echo "<tr>
			<th>Timestamp_ARP</th>
			<th>Sourcemac_ARP</th>
			<th>Destinationmac_ARP</th>
			<th>Sourceip_ARP</th>
			<th>Destinationip_ARP</th>
			<th>plength_ARP</th>
	     </tr>";
	$file1 = fopen("timestamp_arp","r");
	$file2 = fopen("sourcemac_arp","r");
        $file3 = fopen("destinationmac_arp","r");
	$file4 = fopen("sourceip_arp","r");
	$file5 = fopen("destinationip_arp","r");
	$file6 = fopen("plength_arp","r");
	while(! feof($file1))
	{
		echo "<tr>";
		echo "<td>".fgets($file1)."</td>";
		echo "<td>".fgets($file2)."</td>";
		echo "<td>".fgets($file3)."</td>";
		echo "<td>".fgets($file4)."</td>";
		echo "<td>".fgets($file5)."</td>";
		echo "<td>".fgets($file6)."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
}
else if($b == "udp")
{
if($a == "timestamp")
{
	echo '<table border = "1">';
        echo "<tr>
        	<th>Timestamp_UDP</th>
             </tr>";
        $file = fopen("timestamp_udp","r");
        while (! feof($file))
        {
        	echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
	fclose($file);
}
if($a == "s_mac")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Sourcemac_UDP</th>
             </tr>";
        $file = fopen("sourcemac_udp","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "d_mac")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Destinationmac_UDP</th>
             </tr>";
        $file = fopen("destinationmac_udp","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "s_ip")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Sourceip_UDP</th>
             </tr>";
        $file = fopen("sourceip_udp","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "s_port")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Sourceport_UDP</th>
             </tr>";
        $file = fopen("sourceport_udp","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "d_ip")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Destinationip_UDP</th>
             </tr>";
        $file = fopen("destinationip_udp","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "d_port")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Destinationport_UDP</th>
             </tr>";
        $file = fopen("destinationport_udp","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "plength")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Plength_UDP</th>
             </tr>";
        $file = fopen("plength_udp","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
else
{
        echo '<table border = "1">';
        echo "<tr>
                        <th>Timestamp_UDP</th>
                        <th>Sourcemac_UDP</th>
			<th>Destinationmac_UDP</th>
			<th>Sourceip_UDP</th>
                        <th>Sourceport_UDP</th>
			<th>Destinationip_UDP</th>
			<th>Destinationport_UDP</th>
                        <th>plength_UDP</th>
             </tr>";
        $file1 = fopen("timestamp_udp","r");
        $file2 = fopen("sourcemac_udp","r");
        $file3 = fopen("destinationmac_udp","r");
	$file4 = fopen("sourceip_udp","r");
	$file5 = fopen("sourceport_udp","r");
	$file6 = fopen("destinationip_udp","r");
	$file7 = fopen("destinationport_udp","r");
        $file8 = fopen("plength_udp","r");
        while(! feof($file1))
        {
                echo "<tr>";
                echo "<td>".fgets($file1)."</td>";
                echo "<td>".fgets($file2)."</td>";
                echo "<td>".fgets($file3)."</td>";
                echo "<td>".fgets($file4)."</td>";
                echo "<td>".fgets($file5)."</td>";
		echo "<td>".fgets($file6)."</td>";
		echo "<td>".fgets($file7)."</td>";
		echo "<td>".fgets($file8)."</td>";
                echo "</tr>";
        }
        echo "</table>";
}
}
else if($b == "ip")
{
if($a == "timestamp")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Timestamp_IP</th>
             </tr>";
        $file = fopen("timestamp_ip","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "s_mac")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Sourcemac_IP</th>
             </tr>";
        $file = fopen("sourcemac_ip","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "d_mac")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Destinationmac_IP</th>
             </tr>";
        $file = fopen("destinationmac_ip","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "s_ip")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Sourceip_IP</th>
             </tr>";
        $file = fopen("sourceip_ip","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "s_port")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Sourceport_IP</th>
             </tr>";
        $file = fopen("sourceport_ip","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "d_ip")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Destinationip_IP</th>
             </tr>";
        $file = fopen("destinationip_ip","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "d_port")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Destinationport_IP</th>
             </tr>";
        $file = fopen("destinationport_ip","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
if($a == "plength")
{
        echo '<table border = "1">';
        echo "<tr>
                <th>Plength_IP</th>
             </tr>";
        $file = fopen("plength_ip","r");
        while (! feof($file))
        {
                echo "<tr><td>" .fgets($file)."</td></tr>";
        }
        echo "</table>";
        fclose($file);
}
else
{
        echo '<table border = "1">';
        echo "<tr>
                        <th>Timestamp_IP</th>
                        <th>Sourcemac_IP</th>
                        <th>Destinationmac_IP</th>
                        <th>Sourceip_IP</th>
                        <th>Sourceport_IP</th>
                        <th>Destinationip_IP</th>
                        <th>Destinationport_IP</th>
                        <th>plength_IP</th>
             </tr>";
        $file1 = fopen("timestamp_ip","r");
        $file2 = fopen("sourcemac_ip","r");
        $file3 = fopen("destinationmac_ip","r");
        $file4 = fopen("sourceip_ip","r");
        $file5 = fopen("sourceport_ip","r");
        $file6 = fopen("destinationip_ip","r");
        $file7 = fopen("destinationport_ip","r");
        $file8 = fopen("plength_ip","r");
        while(! feof($file1))
        {
                echo "<tr>";
                echo "<td>".fgets($file1)."</td>";
                echo "<td>".fgets($file2)."</td>";
                echo "<td>".fgets($file3)."</td>";
                echo "<td>".fgets($file4)."</td>";
                echo "<td>".fgets($file5)."</td>";
                echo "<td>".fgets($file6)."</td>";
                echo "<td>".fgets($file7)."</td>";
                echo "<td>".fgets($file8)."</td>";
                echo "</tr>";
        }
        echo "</table>";
}
}
?>
