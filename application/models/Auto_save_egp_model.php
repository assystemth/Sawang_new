<?php
class Auto_save_egp_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // เรียกใช้งานฐานข้อมูล
    }

    public function save_data_egp_y2567($json_url)
    {
        // Get the JSON data from the URL
        $json_data = file_get_contents($json_url);

        // Decode the JSON data into an associative array
        $data = json_decode($json_data, true);

        // Check if the 'result' key exists in the data
        if (isset($data['result']) && is_array($data['result']) && !empty($data['result'])) {
            $results = $data['result'];

            // Delete existing data from the table
            $this->db->empty_table('tbl_bp_report_y2567');

            // Insert data into the database
            foreach ($results as $row) {
                // Flatten the array
                $flattenedRow = $this->flattenArray($row);

                // Remove the index '0' from 'contract' headers
                $flattenedRow = array_combine(
                    array_map(function ($key) {
                        return str_replace('_0_', '_', $key);
                    }, array_keys($flattenedRow)),
                    $flattenedRow
                );

                // Insert data into the database
                $this->db->insert('tbl_bp_report_y2567', $flattenedRow);
            }

            return count($results); // Return the number of rows inserted
        } else {
            return 0; // Return 0 if no data found or unable to fetch data
        }
    }

    public function save_data_egp_y2566($json_url)
    {
        // Get the JSON data from the URL
        $json_data = file_get_contents($json_url);

        // Decode the JSON data into an associative array
        $data = json_decode($json_data, true);

        // Check if the 'result' key exists in the data
        if (isset($data['result']) && is_array($data['result']) && !empty($data['result'])) {
            $results = $data['result'];

            // Delete existing data from the table
            $this->db->empty_table('tbl_bp_report_y2566');

            // Insert data into the database
            foreach ($results as $row) {
                // Flatten the array
                $flattenedRow = $this->flattenArray($row);

                // Remove the index '0' from 'contract' headers
                $flattenedRow = array_combine(
                    array_map(function ($key) {
                        return str_replace('_0_', '_', $key);
                    }, array_keys($flattenedRow)),
                    $flattenedRow
                );

                // Insert data into the database
                $this->db->insert('tbl_bp_report_y2566', $flattenedRow);
            }

            return count($results); // Return the number of rows inserted
        } else {
            return 0; // Return 0 if no data found or unable to fetch data
        }
    }

    public function save_data_egp_y2565($json_url)
    {
        // Get the JSON data from the URL
        $json_data = file_get_contents($json_url);

        // Decode the JSON data into an associative array
        $data = json_decode($json_data, true);

        // Check if the 'result' key exists in the data
        if (isset($data['result']) && is_array($data['result']) && !empty($data['result'])) {
            $results = $data['result'];

            // Delete existing data from the table
            $this->db->empty_table('tbl_bp_report_y2565');

            // Insert data into the database
            foreach ($results as $row) {
                // Flatten the array
                $flattenedRow = $this->flattenArray($row);

                // Remove the index '0' from 'contract' headers
                $flattenedRow = array_combine(
                    array_map(function ($key) {
                        return str_replace('_0_', '_', $key);
                    }, array_keys($flattenedRow)),
                    $flattenedRow
                );

                // Insert data into the database
                $this->db->insert('tbl_bp_report_y2565', $flattenedRow);
            }

            return count($results); // Return the number of rows inserted
        } else {
            return 0; // Return 0 if no data found or unable to fetch data
        }
    }

    public function save_data_egp_y2564($json_url)
    {
        // Get the JSON data from the URL
        $json_data = file_get_contents($json_url);

        // Decode the JSON data into an associative array
        $data = json_decode($json_data, true);

        // Check if the 'result' key exists in the data
        if (isset($data['result']) && is_array($data['result']) && !empty($data['result'])) {
            $results = $data['result'];

            // Delete existing data from the table
            $this->db->empty_table('tbl_bp_report_y2564');

            // Insert data into the database
            foreach ($results as $row) {
                // Flatten the array
                $flattenedRow = $this->flattenArray($row);

                // Remove the index '0' from 'contract' headers
                $flattenedRow = array_combine(
                    array_map(function ($key) {
                        return str_replace('_0_', '_', $key);
                    }, array_keys($flattenedRow)),
                    $flattenedRow
                );

                // Insert data into the database
                $this->db->insert('tbl_bp_report_y2564', $flattenedRow);
            }

            return count($results); // Return the number of rows inserted
        } else {
            return 0; // Return 0 if no data found or unable to fetch data
        }
    }

    public function save_data_egp_y2563($json_url)
    {
        // Get the JSON data from the URL
        $json_data = file_get_contents($json_url);

        // Decode the JSON data into an associative array
        $data = json_decode($json_data, true);

        // Check if the 'result' key exists in the data
        if (isset($data['result']) && is_array($data['result']) && !empty($data['result'])) {
            $results = $data['result'];

            // Delete existing data from the table
            $this->db->empty_table('tbl_bp_report_y2563');

            // Insert data into the database
            foreach ($results as $row) {
                // Flatten the array
                $flattenedRow = $this->flattenArray($row);

                // Remove the index '0' from 'contract' headers
                $flattenedRow = array_combine(
                    array_map(function ($key) {
                        return str_replace('_0_', '_', $key);
                    }, array_keys($flattenedRow)),
                    $flattenedRow
                );

                // Insert data into the database
                $this->db->insert('tbl_bp_report_y2563', $flattenedRow);
            }

            return count($results); // Return the number of rows inserted
        } else {
            return 0; // Return 0 if no data found or unable to fetch data
        }
    }

    // Function to flatten nested arrays and combine keys
    private function flattenArray($array, $prefix = '')
    {
        $result = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                // Recursively flatten nested arrays
                $result += $this->flattenArray($value, $prefix . $key . '_');
            } else {
                // Combine keys with underscores
                $result[$prefix . $key] = $value;
            }
        }
        return $result;
    }
}
