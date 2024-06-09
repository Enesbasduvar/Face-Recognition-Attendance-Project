# Face Recognition Attendance Project

This project, developed using Python, takes attendance using facial recognition technology for classrooms or businesses. Recognized faces are sent to the server via API, where attendance is taken and records are kept.

## Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features
- Fast and reliable attendance taking with facial recognition
- Sending recognized faces to the server via API
- Keeping attendance records on the server
- Generating attendance reports by class or business

## Installation
To run your project locally, follow these steps:
1. Clone the repository:
   ```bash
   git clone https://github.com/your_username/face-recognition-attendance.git
   ```
2. Install necessary dependencies:
   ```bash
   cd face-recognition-attendance
   cd client-server
   pip install -r requirements.txt
   ```

### Using Virtual Environment
If you're using a Python virtual environment, you can follow these steps to install the packages into your virtual environment:
1. Create a Virtual Environment:
   - Open your terminal or command prompt and navigate to the directory where you want to create the virtual environment.
   - Create the virtual environment by running the following command:
     ```sh
     python -m venv myenv
     ```
     (You can replace `myenv` with the name you want to give your virtual environment.)
2. Activate the Virtual Environment:
   - To activate the virtual environment, you can use the following commands:
     - **Windows**:
       ```sh
       myenv\Scripts\activate
       ```
     - **macOS/Linux**:
       ```sh
       source myenv/bin/activate
       ```
   - Once the virtual environment is activated successfully, you should see a prompt in your terminal like `(myenv)`.
3. Install Packages:
   - Navigate to the directory where `requirements.txt` is located in your terminal.
   - Install the packages by running the following command:
     ```sh
     pip install -r requirements.txt
     ```

### Apache, PHP, and MySQL Installation
#### Windows
1. **Installing Apache, PHP, and MySQL using XAMPP:**
   - XAMPP provides an easy package solution to install Apache, PHP, and MySQL together.
   1. **Downloading and Installing XAMPP:**
      - Download XAMPP for Windows from the official website.
      - Run the installation file and follow the on-screen instructions to install Apache, MySQL, and PHP modules.
   2. **XAMPP Control Panel:**
      - After installation, open the XAMPP Control Panel.
      - Start the Apache and MySQL services.
   3. **Updating PHP Version (PHP 8.3):**
      - XAMPP may not come with the latest PHP version by default. To download PHP 8.3 and replace it with XAMPP:
      - Download PHP 8.3 from the official PHP website.
      - Copy the downloaded PHP files to the `php` directory of XAMPP (e.g., `C:\xampp\php`).
      - Update the `php.ini` file according to the new PHP version.

#### Linux (Ubuntu/Debian Based)
1. **Installing Apache:**
   ```sh
   sudo apt update
   sudo apt install apache2
   ```
2. **Installing PHP 8.3:**
   1. **Adding PHP 8.3 Package Repository:**
      ```sh
      sudo apt install software-properties-common
      sudo add-apt-repository ppa:ondrej/php
      sudo apt update
      ```
   2. **Installing PHP 8.3 and Required Modules:**
      ```sh
      sudo apt install php8.3 libapache2-mod-php8.3
      ```
3. **Installing MySQL:**
   ```sh
   sudo apt install mysql-server
   ```
4. **Starting Apache and MySQL Services:**
   ```sh
   sudo systemctl start apache2
   sudo systemctl enable apache2
   sudo systemctl start mysql
   sudo systemctl enable mysql
   ```

## Usage
Explain how to use your project:
1. Start Apache and MySQL servers:
   ```bash
   sudo service apache2 start
   sudo service mysql start
   ```
2. Start the development server:
   ```bash
   python app.py
   ```
3. Visit http://localhost:5000 and http://localhost:80 in your browser.
4. Start the facial recognition module and ensure recognized faces are sent to the server via the API.

## Contributing
If you would like to contribute, follow these steps:
1. Fork the repository.
2. Create a new branch: `git checkout -b new_feature`.
3. Commit your changes: `git commit -m 'Add new feature'`.
4. Push the branch: `git push origin new_feature`.
5. Open a pull request.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for more details.

## Contact
For any questions or suggestions, contact: [enes.basduvar@mail.com](mailto:enes.basduvar@mail.com).