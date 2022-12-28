#!/usr/bin/env python3
from gpiozero import MotionSensor
from picamera import PiCamera
from datetime import datetime
from gpiozero import LED
import time
import mysql.connector
#Connecting to the database
myDB = mysql.connector.connect(
    host = "localhost",
    user = "devin",
    password = "piis314",
    database = "tpjProjectDB"
)
#Variables for Camera and PIR
pir = MotionSensor(21) # 21 is GPIO number for motion number 
camera = PiCamera()
red = LED(13) #13 is GPIo number for LED
myCursor = myDB.cursor()

def insertImage(fileName, filePath):
    now = datetime.now()
    with open(filePath, "rb") as File:
        BinaryData = File.read()
    SQLStatement = "INSERT INTO images (img_name, image, img_date) VALUES (%s, %s, %s)"
    myCursor.execute(SQLStatement, (fileName, BinaryData, now))
    myDB.commit()
#Main code:
while True:
    pir.wait_for_motion()
    print("Motion Detected!")
    red.on()
    for x in range(1):
        filename = "{0:%Y}-{0:%m}-{0:%d}-{0:%I}:{0:%M}:{0:%S}_{0:%p}".format(datetime.now())
        filepath = "/home/pi/tpj_project/pi_images/" + filename + ".jpeg"
        print("\nImage Saved\n")
        #camera.start_preview()
        time.sleep(2)
        camera.capture(filepath)
        insertImage(filename, filepath)
        #return filename, filepath
    red.off()
    