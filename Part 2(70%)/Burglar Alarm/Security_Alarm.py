#!/usr/bin/env python
from time import sleep
from gpiozero import LED
from gpiozero import MotionSensor
import sys
import pygame
pygame.mixer.init()
pygame.mixer.music.load("/home/pi/Downloads/alarm.mp3")
pir = MotionSensor(26)
led = LED(4)
sleep(1)
while True:
        pir.wait_for_motion()
        led.on()
        print ("Intruder Found")
        pygame.mixer.music.play()
        sleep(5)
        pygame.mixer.music.play()
        led.off()
        pygame.mixer.music.stop()
        sys.exit(0)
