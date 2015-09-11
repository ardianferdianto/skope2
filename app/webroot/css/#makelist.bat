@echo off
setlocal enabledelayedexpansion

for %%A in (*.css) do (
	echo albert %%A gultom >> #javatext.txt
)

endlocal
pause