# Project-TPJ

## Introduction:
This proposal aims at delivering a motion detection solution utilising Raspberry Pi and PIR Motion Detection Sensors to address residential and corporate security challenges. The Raspberry Pi is a little computer that can be plugged into a computer monitor or any other display and be operated with the use of a keyboard and mouse. 
PIR Sensors, or passive infrared sensors, are small devices that aid in motion detection. The system will incorporate a Pi camera which would capture an image/video of the person at the entrance and upload the same to a local database which can be accessed by a user at any given time. The recorded data can be extracted from the database to display the details on a computer screen.
Such a system can be installed at automatic doorways, house entrances, private room entryways,etc to ensure safety and aid people in tracking down any mishaps.


## Functional Features of the Project
The project has 4 main hardware components. They include Raspberry Pi, PIR (Passive Infrared) Motion Sensor, Pi camera module. It also includes a monitor for reviewing the logged information.
 
### Microcontroller: Raspberry Pi
Raspberry Pi will be our main MCU that will handle all the processing. It will take care of the inputs from the PIR motion sensor and use that to capture or record the surroundings using the Pi camera. 
A (T-shaped) Raspberry Pi GPIO extension board will be connected to the breadboard facilitating the components to be connected to the breadboard directly.
It will also act as a local database device responsible for storing the data captured from the camera and further making that information available to view on a Web Page.  

### Input Device: Raspberry Pi Camera Module
The camera is connected to the pi using the camera module port on the Pi using a ribbon cable. 
The image captured is stored on the Raspberry Pi SD card. 

### Input Device: Adafruit PIR Motion Sensor
PIR motion sensor is used to sense the motion in the surroundings that fall in the sensor’s range. 
As the motion is detected, that signal is sent to Pi. An LED is also set up to indicate any motion. Following this the camera takes the image.
 
### Output Device: Desktop Monitor
The monitor is used to operate the Web Based application that will contain all the information from the sensors. 
The monitor will be connected to Pi using an HDMI cable.

## Product Specification 

### Hardware used:

#### PIR Sensor
Dimensions: 0.94in x 1.27in x 0.97in
Weight: 5.87g
Runs on 5V-12V power
3.3V high/low digital signal output
Adjustable delay before firing
Adjustable sensitivity
Detect motion upto 7 meters away
1 foot cable with a socket to reposition the sensor

#### Pi Camera
Sensor type: OmniVision OV5647 Color CMOS QSXGA (5-megapixel)
Sensor size: 3.67 x 2.74 mm (1/4" format)
Pixel Count: 2592 x 1944
Pixel Size: 1.4 x 1.4 um
Lens: f=3.6 mm, f/2.9
Angle of View: 54 x 41 degrees
Field of View: 2.0 x 1.33 m at 2 m
Video: 1080p at 30 fps with codec H.264 (AVC)
Up to 90 fps Video at VGA
 
#### Raspberry Pi
Broadcom BCM2837B0, Cortex-A53 (ARMv8) 64-bit SoC @ 1.4GHz
1GB LPDDR2 SDRAM
2.4GHz and 5GHz IEEE 802.11.b/g/n/ac wireless LAN, Bluetooth 4.2, BLE
Gigabit Ethernet over USB 2.0 (maximum throughput 300 Mbps)
Extended 40-pin GPIO header
Full-size HDMI
4 USB 2.0 ports
CSI camera port for connecting a Raspberry Pi camera
DSI display port for connecting a Raspberry Pi touchscreen display
4-pole stereo output and composite video port
Micro SD port for loading your operating system and storing data
5V/2.5A DC power input
Power-over-Ethernet (PoE) support (requires separate PoE HAT)

#### LEDs
1.8-2.2VDC forward drop
Max current: 20mA


### Software Section:

#### HTML/CSS
version Html5 and Css3 used to build web page

#### Structured Query Language
MySQL Used to construct the database for storing information.

#### Python
Used for CGI(Common Gateway Interface)
Used for gathering sensor data

#### PHP
Used for communicating with the database and displaying data on a webpage.

