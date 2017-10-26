<?php
echo "symcon stub functions included.".PHP_EOL;
if (!function_exists('\IPS_LogMessage')) {
    $_IPS = array (
      'SELF' => 0,
      'SENDER' => '',
      'VALUE' => 0,
      'OLDVALUE' => 0,
      'VARIABLE' => 0,
      'EVENT' => 0,
      'TRIGGER' => 0,
      'TARGET' => 0,
      'ACTION' => 0,
      'INSTANCE' => 0,
      'THREAD' => 0,
      'FORM' => 0,
      'COMPONENT' => '',
      'DIRECTION' => 0,
      'DURATION' => 0,
      'INSTANCE2' => 0,
      'STATUS' => 0,
      'STATUSTEXT' => '',
      'CONNECTION' => 0,
      'DATA' => '',
      'CONFIGURATOR' => '',
      'INSTANCES' =>
      array (
      ),
      'INVERTS' =>
      array (
      ),
      'CLIENTIP' => '',
      'CLIENTPORT' => 0,
    );

    function AC_ChangeVariableID(int $InstanceID, int $OldVariableID, int $NewVariableID) { return true; }
    function AC_DeleteVariableData(int $InstanceID, int $VariableID, int $StartTime, int $EndTime) { return true; }
    function AC_FetchChartData(int $InstanceID, int $ObjectID, int $StartTime, int $TimeSpan, bool $IsHD) { return Array(); }
    function AC_GetAggregatedValues(int $InstanceID, int $VariableID, int $AggregationSpan, int $StartTime, int $EndTime, int $Limit) { return Array(); }
    function AC_GetAggregationType(int $InstanceID, int $VariableID) { return 0; }
    function AC_GetAggregationVariables(int $InstanceID, bool $CalculateStatistics) { return Array(); }
    function AC_GetGraphStatus(int $InstanceID, int $VariableID) { return true; }
    function AC_GetLoggedValues(int $InstanceID, int $VariableID, int $StartTime, int $EndTime, int $Limit) { return Array(); }
    function AC_GetLoggingStatus(int $InstanceID, int $VariableID) { return true; }
    function AC_ReAggregateVariable(int $InstanceID, int $VariableID) { return true; }
    function AC_RenderChart(int $InstanceID, int $ObjectID, int $StartTime, int $TimeSpan, bool $IsHD, bool $IsExtrema, bool $IsDyn, int $Width, int $Height) { return ''; }
    function AC_SetAggregationType(int $InstanceID, int $VariableID, int $AggregationType) { return true; }
    function AC_SetGraphStatus(int $InstanceID, int $VariableID, bool $Active) { return true; }
    function AC_SetLoggingStatus(int $InstanceID, int $VariableID, bool $Active) { return true; }
    function ALL_ReadConfiguration(int $InstanceID) { return true; }
    function ALL_SwitchActor(int $InstanceID, int $ChannelID, bool $DeviceOn) { return true; }
    function ALL_SwitchMode(int $InstanceID, bool $DeviceOn) { return true; }
    function ALL_UpdateValues(int $InstanceID) { return true; }
    function ALX_GetObjectList(int $InstanceID) { return ''; }
    function ALX_SaveConfig(int $InstanceID) { return ''; }
    function CC_ActivateServer(int $InstanceID) { return true; }
    function CC_GetURL(int $InstanceID) { return ''; }
    function CMI_UpdateValues(int $InstanceID) { return true; }
    function CSCK_SendText(int $InstanceID, string $Text) { return true; }
    function Cutter_ClearBuffer(int $InstanceID) { return true; }
    function DMX_FadeChannel(int $InstanceID, int $Channel, int $Value, float $FadingSeconds) { return true; }
    function DMX_FadeChannelDelayed(int $InstanceID, int $Channel, int $Value, float $FadingSeconds, float $DelayedSeconds) { return true; }
    function DMX_FadeRGB(int $InstanceID, int $R, int $G, int $B, float $FadingSeconds) { return true; }
    function DMX_FadeRGBDelayed(int $InstanceID, int $R, int $G, int $B, float $FadingSeconds, float $DelayedSeconds) { return true; }
    function DMX_RequestInfo(int $InstanceID) { return true; }
    function DMX_ResetInterface(int $InstanceID) { return true; }
    function DMX_SetBlackOut(int $InstanceID, bool $BlackoutOn) { return true; }
    function DMX_SetChannel(int $InstanceID, int $Channel, int $Value) { return true; }
    function DMX_SetRGB(int $InstanceID, int $R, int $G, int $B) { return true; }
    function DS_CallScene(int $InstanceID, int $SceneID) { return true; }
    function DS_DimSet(int $InstanceID, int $Intensity) { return true; }
    function DS_GetKnownDevices(int $InstanceID) { return Array(); }
    function DS_RequestBinaryInputs(int $InstanceID) { return true; }
    function DS_RequestSensorInputs(int $InstanceID) { return true; }
    function DS_RequestStatus(int $InstanceID) { return true; }
    function DS_RequestToken(int $InstanceID, string $Username, string $Password) { return true; }
    function DS_SaveScene(int $InstanceID, int $SceneID) { return true; }
    function DS_ShutterMove(int $InstanceID, int $Position) { return true; }
    function DS_ShutterMoveDown(int $InstanceID) { return true; }
    function DS_ShutterMoveUp(int $InstanceID) { return true; }
    function DS_ShutterStop(int $InstanceID) { return true; }
    function DS_SwitchMode(int $InstanceID, bool $DeviceOn) { return true; }
    function DS_UndoScene(int $InstanceID, int $SceneID) { return true; }
    function EIB_Char(int $InstanceID, string $Value) { return true; }
    function EIB_Counter16bit(int $InstanceID, int $Value) { return true; }
    function EIB_Counter32bit(int $InstanceID, int $Value) { return true; }
    function EIB_Counter8bit(int $InstanceID, int $Value) { return true; }
    function EIB_Date(int $InstanceID, string $Value) { return true; }
    function EIB_DimControl(int $InstanceID, int $Value) { return true; }
    function EIB_DimValue(int $InstanceID, int $Value) { return true; }
    function EIB_DriveBladeValue(int $InstanceID, int $Value) { return true; }
    function EIB_DriveMove(int $InstanceID, bool $Value) { return true; }
    function EIB_DriveShutterValue(int $InstanceID, int $Value) { return true; }
    function EIB_DriveStep(int $InstanceID, bool $Value) { return true; }
    function EIB_FloatValue(int $InstanceID, float $Value) { return true; }
    function EIB_GetKnownDevices(int $InstanceID) { return Array(); }
    function EIB_Move(int $InstanceID, int $Command) { return true; }
    function EIB_Position(int $InstanceID, int $Position) { return true; }
    function EIB_PriorityControl(int $InstanceID, int $Value) { return true; }
    function EIB_PriorityPosition(int $InstanceID, bool $Value) { return true; }
    function EIB_RequestInfo(int $InstanceID) { return true; }
    function EIB_RequestStatus(int $InstanceID) { return true; }
    function EIB_Scale(int $InstanceID, int $Value) { return true; }
    function EIB_SearchDevices(int $InstanceID) { return true; }
    function EIB_SetRGB(int $InstanceID, int $R, int $G, int $B) { return true; }
    function EIB_SetRGBW(int $InstanceID, int $R, int $G, int $B, int $W) { return true; }
    function EIB_Str(int $InstanceID, string $Value) { return true; }
    function EIB_Switch(int $InstanceID, bool $Value) { return true; }
    function EIB_Time(int $InstanceID, string $Value) { return true; }
    function EIB_UploadDataPointFile(int $InstanceID, string $Content) { return true; }
    function EIB_Value(int $InstanceID, float $Value) { return true; }
    function ENO_DimSet(int $InstanceID, int $Intensity) { return true; }
    function ENO_RequestStatus(int $InstanceID) { return true; }
    function ENO_SendCST(int $InstanceID, bool $value) { return true; }
    function ENO_SendCTM(int $InstanceID, int $value) { return true; }
    function ENO_SendCV(int $InstanceID, float $value) { return true; }
    function ENO_SendERH(int $InstanceID, bool $value) { return true; }
    function ENO_SendFANOR(int $InstanceID, int $value) { return true; }
    function ENO_SendFANOR_2(int $InstanceID, bool $value) { return true; }
    function ENO_SendLearn(int $InstanceID) { return true; }
    function ENO_SendLearnEx(int $InstanceID) { return true; }
    function ENO_SendRO(int $InstanceID, int $value) { return true; }
    function ENO_SendSPS(int $InstanceID, float $value) { return true; }
    function ENO_SetActiveMessage(int $InstanceID, int $Message) { return true; }
    function ENO_SetButtonLock(int $InstanceID, bool $Active) { return true; }
    function ENO_SetFanStage(int $InstanceID, int $FanStage) { return true; }
    function ENO_SetIntensity(int $InstanceID, bool $DeviceOn, int $Intensity) { return true; }
    function ENO_SetLockFanStage(int $InstanceID, bool $Locked) { return true; }
    function ENO_SetLockRoomOccupancy(int $InstanceID, bool $Locked) { return true; }
    function ENO_SetMode(int $InstanceID, int $Mode) { return true; }
    function ENO_SetPosition(int $InstanceID, int $Position) { return true; }
    function ENO_SetRoomOccupancy(int $InstanceID, bool $Occupied) { return true; }
    function ENO_SetTemperature(int $InstanceID, float $Temperature) { return true; }
    function ENO_SetTemperature1(int $InstanceID, float $Temperature) { return true; }
    function ENO_ShutterMoveDown(int $InstanceID) { return true; }
    function ENO_ShutterMoveDownEx(int $InstanceID, float $Seconds) { return true; }
    function ENO_ShutterMoveUp(int $InstanceID) { return true; }
    function ENO_ShutterMoveUpEx(int $InstanceID, float $Seconds) { return true; }
    function ENO_ShutterStepDown(int $InstanceID) { return true; }
    function ENO_ShutterStepUp(int $InstanceID) { return true; }
    function ENO_ShutterStop(int $InstanceID) { return true; }
    function ENO_SwitchMode(int $InstanceID, bool $DeviceOn) { return true; }
    function ENO_SwitchModeEx(int $InstanceID, bool $DeviceOn, int $SendMode) { return true; }
    function ENO_SwitchVacationMode(int $InstanceID, bool $Value) { return true; }
    function EVT_hookMessage(int $InstanceID, $sender, $evtType, $target) { return ''; }
    function EVT_timer(int $InstanceID) { return ''; }
    function FHT_RequestData(int $InstanceID) { return true; }
    function FHT_SetDay(int $InstanceID, int $Value) { return true; }
    function FHT_SetHour(int $InstanceID, int $Value) { return true; }
    function FHT_SetMinute(int $InstanceID, int $Value) { return true; }
    function FHT_SetMode(int $InstanceID, int $Mode) { return true; }
    function FHT_SetMonth(int $InstanceID, int $Value) { return true; }
    function FHT_SetTemperature(int $InstanceID, float $Temperature) { return true; }
    function FHT_SetYear(int $InstanceID, int $Value) { return true; }
    function FHZ_GetFHTQueue(int $InstanceID) { return Array(); }
    function FHZ_GetFreeBuffer(int $InstanceID) { return 0; }
    function FS20_DimDown(int $InstanceID) { return true; }
    function FS20_DimUp(int $InstanceID) { return true; }
    function FS20_SetIntensity(int $InstanceID, int $Intensity, int $Duration) { return true; }
    function FS20_SwitchDuration(int $InstanceID, bool $DeviceOn, int $Duration) { return true; }
    function FS20_SwitchMode(int $InstanceID, bool $DeviceOn) { return true; }
    function GetValue(int $VariableID) { return ''; }
    function GetValueBoolean(int $VariableID) { return true; }
    function GetValueFloat(int $VariableID) { return 0.0; }
    function GetValueFormatted(int $VariableID) { return ''; }
    function GetValueInteger(int $VariableID) { return 0; }
    function GetValueString(int $VariableID) { return ''; }
    function HC_TargetValue(int $InstanceID, float $Value) { return true; }
    function HID_SendEvent(int $InstanceID, int $ReportID, string $Text) { return true; }
    function HMS_ReleaseFI(int $InstanceID, int $Delay) { return true; }
    function HM_AlarmReceipt(int $InstanceID, string $Ident) { return ''; }
    function HM_CreateAllRFInstances(int $InstanceID) { return ''; }
    function HM_GetKnownDevices(int $InstanceID) { return Array(); }
    function HM_LoadDevices(int $InstanceID, int $Protocol) { return true; }
    function HM_ReadPara(int $InstanceID) { return ''; }
    function HM_ReadPrograms(int $InstanceID) { return ''; }
    function HM_ReadRFInterfaces(int $InstanceID) { return ''; }
    function HM_ReadServiceMessages(int $InstanceID) { return Array(); }
    function HM_ReadSystemVariables(int $InstanceID) { return ''; }
    function HM_ReadWRInterface(int $InstanceID) { return ''; }
    function HM_RequestStatus(int $InstanceID, string $Parameter) { return true; }
    function HM_ResetTimer(int $InstanceID) { return ''; }
    function HM_RunScript(int $InstanceID, string $Script) { return ''; }
    function HM_StartProgram(int $InstanceID, string $Parameter) { return ''; }
    function HM_SystemVariablesTimer(int $InstanceID) { return ''; }
    function HM_WritePara(int $InstanceID, string $Parameter) { return ''; }
    function HM_WriteValueBoolean(int $InstanceID, string $Parameter, bool $Value) { return true; }
    function HM_WriteValueBoolean2(int $InstanceID, string $Parameter, bool $Value) { return ''; }
    function HM_WriteValueDisplay(int $InstanceID, string $Text1, int $Icon1, string $Text2, int $Icon2, string $Text3, int $Icon3) { return ''; }
    function HM_WriteValueDisplayEx(int $InstanceID, string $Text1, int $Icon1, string $Text2, int $Icon2, string $Text3, int $Icon3, int $Chime, int $Repeat, int $Wait, int $Color) { return ''; }
    function HM_WriteValueDisplayLine(int $InstanceID, int $Line, string $Text, int $Icon) { return ''; }
    function HM_WriteValueDisplayLineEx(int $InstanceID, int $Line, string $Text, int $Icon, int $Chime, int $Repeat, int $Wait, int $Color) { return ''; }
    function HM_WriteValueDisplayNotify(int $InstanceID, int $Chime, int $Repeat, int $Wait, int $Color) { return ''; }
    function HM_WriteValueFloat(int $InstanceID, string $Parameter, float $Value) { return true; }
    function HM_WriteValueFloat2(int $InstanceID, string $Parameter, float $Value) { return ''; }
    function HM_WriteValueInteger(int $InstanceID, string $Parameter, int $Value) { return true; }
    function HM_WriteValueInteger2(int $InstanceID, string $Parameter, int $Value) { return ''; }
    function HM_WriteValueString(int $InstanceID, string $Parameter, string $Value) { return true; }
    function HM_WriteValueString2(int $InstanceID, string $Parameter, string $Value) { return ''; }
    function HUEGroup_ApplyData(int $InstanceID, $data) { return ''; }
    function HUEGroup_GetBrightness(int $InstanceID) { return ''; }
    function HUEGroup_GetColor(int $InstanceID) { return ''; }
    function HUEGroup_GetState(int $InstanceID) { return ''; }
    function HUEGroup_GetValue(int $InstanceID, string $key) { return ''; }
    function HUEGroup_RequestData(int $InstanceID) { return ''; }
    function HUEGroup_SetBrightness(int $InstanceID, int $value) { return ''; }
    function HUEGroup_SetColor(int $InstanceID, int $value) { return ''; }
    function HUEGroup_SetState(int $InstanceID, bool $value) { return ''; }
    function HUEGroup_SetValue(int $InstanceID, $key, $value) { return ''; }
    function HUEGroup_SetValues(int $InstanceID, $list) { return ''; }
    function HUE_ApplyData(int $InstanceID, $data) { return ''; }
    function HUE_GetBrightness(int $InstanceID) { return ''; }
    function HUE_GetColor(int $InstanceID) { return ''; }
    function HUE_GetDeviceByGroupId(int $InstanceID, int $groupId) { return ''; }
    function HUE_GetDeviceByUniqueId(int $InstanceID, string $uniqueId) { return ''; }
    function HUE_GetDeviceByUniqueIdSensor(int $InstanceID, string $uniqueId) { return ''; }
    function HUE_GetState(int $InstanceID) { return ''; }
    function HUE_GetValue(int $InstanceID, string $key) { return ''; }
    function HUE_RegisterUser(int $InstanceID) { return ''; }
    function HUE_Request(int $InstanceID, string $path, $data) { return ''; }
    function HUE_RequestData(int $InstanceID) { return ''; }
    function HUE_SetBrightness(int $InstanceID, int $value) { return ''; }
    function HUE_SetColor(int $InstanceID, int $value) { return ''; }
    function HUE_SetState(int $InstanceID, bool $value) { return ''; }
    function HUE_SetValue(int $InstanceID, $key, $value) { return ''; }
    function HUE_SetValues(int $InstanceID, $list) { return ''; }
    function HUE_SyncDevices(int $InstanceID) { return ''; }
    function HUE_SyncStates(int $InstanceID) { return ''; }
    function IG_UpdateImage(int $InstanceID) { return true; }
    function IMAP_GetCachedMails(int $InstanceID) { return Array(); }
    function IMAP_GetMailEx(int $InstanceID, string $UID) { return Array(); }
    function IMAP_UpdateCache(int $InstanceID) { return true; }
    function IPS_ApplyChanges(int $InstanceID) { return true; }
    function IPS_CategoryExists(int $CategoryID) { return true; }
    function IPS_ConnectInstance(int $InstanceID, int $ParentID) { return true; }
    function IPS_CreateCategory() { return 0; }
    function IPS_CreateEvent(int $EventType) { return 0; }
    function IPS_CreateInstance(string $ModuleID) { return 0; }
    function IPS_CreateLink() { return 0; }
    function IPS_CreateMedia(int $MediaType) { return 0; }
    function IPS_CreateScript(int $ScriptType) { return 0; }
    function IPS_CreateVariable(int $VariableType) { return 0; }
    function IPS_CreateVariableProfile(string $ProfileName, int $ProfileType) { return true; }
    function IPS_DeleteCategory(int $CategoryID) { return true; }
    function IPS_DeleteEvent(int $EventID) { return true; }
    function IPS_DeleteInstance(int $InstanceID) { return true; }
    function IPS_DeleteLink(int $LinkID) { return true; }
    function IPS_DeleteMedia(int $MediaID, bool $DeleteFile) { return true; }
    function IPS_DeleteScript(int $ScriptID, bool $DeleteFile) { return true; }
    function IPS_DeleteVariable(int $VariableID) { return true; }
    function IPS_DeleteVariableProfile(string $ProfileName) { return true; }
    function IPS_DisableDebug(int $ID) { return true; }
    function IPS_DisconnectInstance(int $InstanceID) { return true; }
    function IPS_EnableDebug(int $ID, int $Duration) { return true; }
    function IPS_EventExists(int $EventID) { return true; }
    function IPS_Execute(string $Filename, string $Parameter, bool $ShowWindow, bool $WaitResult) { return ''; }
    function IPS_ExecuteEx(string $Filename, string $Parameter, bool $ShowWindow, bool $WaitResult, int $SessionID) { return ''; }
    function IPS_FunctionExists(string $FunctionName) { return true; }
    function IPS_GetCategory(int $CategoryID) { return Array(); }
    function IPS_GetCategoryIDByName(string $Name, int $ParentID) { return 0; }
    function IPS_GetCategoryList() { return Array(); }
    function IPS_GetChildrenIDs(int $ID) { return Array(); }
    function IPS_GetCompatibleInstances(int $InstanceID) { return Array(); }
    function IPS_GetCompatibleModules(string $ModuleID) { return Array(); }
    function IPS_GetConfiguration(int $InstanceID) { return ''; }
    function IPS_GetConfigurationForParent(int $InstanceID) { return ''; }
    function IPS_GetConfigurationForm(int $InstanceID) { return ''; }
    function IPS_GetDemoExpiration() { return 0; }
    function IPS_GetEvent(int $EventID) { return Array(); }
    function IPS_GetEventIDByName(string $Name, int $ParentID) { return 0; }
    function IPS_GetEventList() { return Array(); }
    function IPS_GetEventListByType(int $EventType) { return Array(); }
    function IPS_GetFunction(string $FunctionName) { return Array(); }
    function IPS_GetFunctionList(int $InstanceID) { return Array(); }
    function IPS_GetFunctionListByModuleID(string $ModuleID) { return Array(); }
    function IPS_GetFunctions(array $Parameter) { return Array(); }
    function IPS_GetFunctionsMap(array $Parameter) { return Array(); }
    function IPS_GetInstance(int $InstanceID) { return Array(); }
    function IPS_GetInstanceIDByName(string $Name, int $ParentID) { return 0; }
    function IPS_GetInstanceList() { return Array(); }
    function IPS_GetInstanceListByModuleID(string $ModuleID) { return Array(); }
    function IPS_GetInstanceListByModuleType(int $ModuleType) { return Array(); }
    function IPS_GetKernelDate() { return 0; }
    function IPS_GetKernelDir() { return ''; }
    function IPS_GetKernelDirEx() { return ''; }
    function IPS_GetKernelRevision() { return ''; }
    function IPS_GetKernelRunlevel() { return 0; }
    function IPS_GetKernelStartTime() { return 0; }
    function IPS_GetKernelVersion() { return ''; }
    function IPS_GetLibraries(array $Parameter) { return Array(); }
    function IPS_GetLibrary(string $LibraryID) { return Array(); }
    function IPS_GetLibraryList() { return Array(); }
    function IPS_GetLibraryModules(string $LibraryID) { return Array(); }
    function IPS_GetLicensee() { return ''; }
    function IPS_GetLimitDemo() { return 0; }
    function IPS_GetLimitServer() { return ''; }
    function IPS_GetLimitVariables() { return 0; }
    function IPS_GetLimitWebFront() { return 0; }
    function IPS_GetLink(int $LinkID) { return Array(); }
    function IPS_GetLinkIDByName(string $Name, int $ParentID) { return 0; }
    function IPS_GetLinkList() { return Array(); }
    function IPS_GetLiveConsoleCRC() { return ''; }
    function IPS_GetLiveConsoleFile() { return ''; }
    function IPS_GetLiveDashboardCRC() { return ''; }
    function IPS_GetLiveDashboardFile() { return ''; }
    function IPS_GetLiveUpdateVersion() { return ''; }
    function IPS_GetLocation(int $ID) { return ''; }
    function IPS_GetLogDir() { return ''; }
    function IPS_GetMedia(int $MediaID) { return Array(); }
    function IPS_GetMediaContent(int $MediaID) { return ''; }
    function IPS_GetMediaIDByFile(string $FilePath) { return 0; }
    function IPS_GetMediaIDByName(string $Name, int $ParentID) { return 0; }
    function IPS_GetMediaList() { return Array(); }
    function IPS_GetMediaListByType(int $MediaType) { return Array(); }
    function IPS_GetModule(string $ModuleID) { return Array(); }
    function IPS_GetModuleList() { return Array(); }
    function IPS_GetModuleListByType(int $ModuleType) { return Array(); }
    function IPS_GetModules(array $Parameter) { return Array(); }
    function IPS_GetName(int $ID) { return ''; }
    function IPS_GetObject(int $ID) { return Array(); }
    function IPS_GetObjectIDByIdent(string $Ident, int $ParentID) { return 0; }
    function IPS_GetObjectIDByName(string $Name, int $ParentID) { return 0; }
    function IPS_GetObjectList() { return Array(); }
    function IPS_GetOption(string $Option) { return 0; }
    function IPS_GetParent(int $ID) { return 0; }
    function IPS_GetProperty(int $InstanceID, string $Name) { return ''; }
    function IPS_GetScript(int $ScriptID) { return Array(); }
    function IPS_GetScriptContent(int $ScriptID) { return ''; }
    function IPS_GetScriptEventList(int $ScriptID) { return Array(); }
    function IPS_GetScriptFile(int $ScriptID) { return ''; }
    function IPS_GetScriptIDByFile(string $FilePath) { return 0; }
    function IPS_GetScriptIDByName(string $Name, int $ParentID) { return 0; }
    function IPS_GetScriptList() { return Array(); }
    function IPS_GetScriptThread(int $ThreadID) { return Array(); }
    function IPS_GetScriptThreadList() { return Array(); }
    function IPS_GetScriptThreads(array $Parameter) { return Array(); }
    function IPS_GetScriptTimer(int $ScriptID) { return 0; }
    function IPS_GetSecurityMode() { return 0; }
    function IPS_GetSnapshot() { return Array(); }
    function IPS_GetSnapshotChanges(int $LastTimestamp) { return Array(); }
    function IPS_GetTimer(int $TimerID) { return Array(); }
    function IPS_GetTimerList() { return Array(); }
    function IPS_GetTimers(array $Parameter) { return Array(); }
    function IPS_GetVariable(int $VariableID) { return Array(); }
    function IPS_GetVariableEventList(int $VariableID) { return Array(); }
    function IPS_GetVariableIDByName(string $Name, int $ParentID) { return 0; }
    function IPS_GetVariableList() { return Array(); }
    function IPS_GetVariableProfile(string $ProfileName) { return Array(); }
    function IPS_GetVariableProfileList() { return Array(); }
    function IPS_GetVariableProfileListByType(int $ProfileType) { return Array(); }
    function IPS_HasChanges(int $InstanceID) { return true; }
    function IPS_HasChildren(int $ID) { return true; }
    function IPS_InstanceExists(int $InstanceID) { return true; }
    function IPS_IsChild(int $ID, int $ParentID, bool $Recursive) { return true; }
    function IPS_IsInstanceCompatible(int $InstanceID, int $ParentInstanceID) { return true; }
    function IPS_IsModuleCompatible(string $ModuleID, string $ParentModuleID) { return true; }
    function IPS_IsSearching(int $InstanceID) { return true; }
    function IPS_LibraryExists(string $LibraryID) { return true; }
    function IPS_LinkExists(int $LinkID) { return true; }
    function IPS_LogMessage(string $Sender, string $Message) { return true; }
    function IPS_MediaExists(int $MediaID) { return true; }
    function IPS_ModuleExists(string $ModuleID) { return true; }
    function IPS_ObjectExists(int $ID) { return true; }
    function IPS_RequestAction(int $InstanceID, string $VariableIdent, $Value) { return true; }
    function IPS_ResetChanges(int $InstanceID) { return true; }
    function IPS_RunScript(int $ScriptID) { return true; }
    function IPS_RunScriptEx(int $ScriptID, array $Parameters) { return true; }
    function IPS_RunScriptText(string $ScriptText) { return true; }
    function IPS_RunScriptTextEx(string $ScriptText, array $Parameters) { return true; }
    function IPS_RunScriptTextWait(string $ScriptText) { return ''; }
    function IPS_RunScriptTextWaitEx(string $ScriptText, array $Parameters) { return ''; }
    function IPS_RunScriptWait(int $ScriptID) { return ''; }
    function IPS_RunScriptWaitEx(int $ScriptID, array $Parameters) { return ''; }
    function IPS_ScriptExists(int $ScriptID) { return true; }
    function IPS_ScriptThreadExists(int $ThreadID) { return true; }
    function IPS_SemaphoreEnter(string $Name, int $Milliseconds) { return true; }
    function IPS_SemaphoreLeave(string $Name) { return true; }
    function IPS_SendDebug(int $SenderID, string $Message, string $Data, int $Format) { return true; }
    function IPS_SendMediaEvent(int $MediaID) { return true; }
    function IPS_SetConfiguration(int $InstanceID, string $Configuration) { return true; }
    function IPS_SetDisabled(int $ID, bool $Disabled) { return true; }
    function IPS_SetEventActive(int $EventID, bool $Active) { return true; }
    function IPS_SetEventCyclic(int $EventID, int $DateType, int $DateValue, int $DateDay, int $DateDayValue, int $TimeType, int $TimeValue) { return true; }
    function IPS_SetEventCyclicDateFrom(int $EventID, int $Day, int $Month, int $Year) { return true; }
    function IPS_SetEventCyclicDateTo(int $EventID, int $Day, int $Month, int $Year) { return true; }
    function IPS_SetEventCyclicTimeFrom(int $EventID, int $Hour, int $Minute, int $Second) { return true; }
    function IPS_SetEventCyclicTimeTo(int $EventID, int $Hour, int $Minute, int $Second) { return true; }
    function IPS_SetEventLimit(int $EventID, int $Count) { return true; }
    function IPS_SetEventScheduleAction(int $EventID, int $ActionID, string $Name, int $Color, string $ScriptText) { return true; }
    function IPS_SetEventScheduleGroup(int $EventID, int $GroupID, int $Days) { return true; }
    function IPS_SetEventScheduleGroupPoint(int $EventID, int $GroupID, int $PointID, int $StartHour, int $StartMinute, int $StartSecond, int $ActionID) { return true; }
    function IPS_SetEventScript(int $EventID, string $EventScript) { return true; }
    function IPS_SetEventTrigger(int $EventID, int $TriggerType, int $TriggerVariableID) { return true; }
    function IPS_SetEventTriggerSubsequentExecution(int $EventID, bool $AllowSubsequentExecutions) { return true; }
    function IPS_SetEventTriggerValue(int $EventID, $TriggerValue) { return true; }
    function IPS_SetHidden(int $ID, bool $Hidden) { return true; }
    function IPS_SetIcon(int $ID, string $Icon) { return true; }
    function IPS_SetIdent(int $ID, string $Ident) { return true; }
    function IPS_SetInfo(int $ID, string $Info) { return true; }
    function IPS_SetLicense(string $Licensee, string $LicenseContent) { return true; }
    function IPS_SetLinkTargetID(int $LinkID, int $ChildID) { return true; }
    function IPS_SetMediaCached(int $MediaID, bool $Cached) { return true; }
    function IPS_SetMediaContent(int $MediaID, string $Content) { return true; }
    function IPS_SetMediaFile(int $MediaID, string $FilePath, bool $FileMustExists) { return true; }
    function IPS_SetName(int $ID, string $Name) { return true; }
    function IPS_SetOption(string $Option, int $Value) { return true; }
    function IPS_SetParent(int $ID, int $ParentID) { return true; }
    function IPS_SetPosition(int $ID, int $Position) { return true; }
    function IPS_SetProperty(int $InstanceID, string $Name, $Value) { return true; }
    function IPS_SetScriptContent(int $ScriptID, string $Content) { return true; }
    function IPS_SetScriptFile(int $ScriptID, string $FilePath) { return true; }
    function IPS_SetScriptTimer(int $ScriptID, int $Interval) { return true; }
    function IPS_SetSecurity(int $Mode, string $Password) { return true; }
    function IPS_SetVariableCustomAction(int $VariableID, int $ScriptID) { return true; }
    function IPS_SetVariableCustomProfile(int $VariableID, string $ProfileName) { return true; }
    function IPS_SetVariableProfileAssociation(string $ProfileName, float $AssociationValue, string $AssociationName, string $AssociationIcon, int $AssociationColor) { return true; }
    function IPS_SetVariableProfileDigits(string $ProfileName, int $Digits) { return true; }
    function IPS_SetVariableProfileIcon(string $ProfileName, string $Icon) { return true; }
    function IPS_SetVariableProfileText(string $ProfileName, string $Prefix, string $Suffix) { return true; }
    function IPS_SetVariableProfileValues(string $ProfileName, float $MinValue, float $MaxValue, float $StepSize) { return true; }
    function IPS_Sleep(int $Milliseconds) { return 0; }
    function IPS_StartSearch(int $InstanceID) { return true; }
    function IPS_StopSearch(int $InstanceID) { return true; }
    function IPS_SupportsSearching(int $InstanceID) { return true; }
    function IPS_TimerExists(int $TimerID) { return true; }
    function IPS_VariableExists(int $VariableID) { return true; }
    function IPS_VariableProfileExists(string $ProfileName) { return true; }
    function IQL4SH_ConvertToV2(int $InstanceID) { return ''; }
    function IQL4SH_GetObjectList(int $InstanceID) { return ''; }
    function IRT_ListButtons(int $InstanceID, string $Remote) { return Array(); }
    function IRT_ListRemotes(int $InstanceID) { return Array(); }
    function IRT_SendOnce(int $InstanceID, string $Remote, string $Button) { return true; }
    function LCN_AddGroup(int $InstanceID, int $Group) { return true; }
    function LCN_AddIntensity(int $InstanceID, int $Intensity) { return true; }
    function LCN_Beep(int $InstanceID, bool $SpecialTone, int $Count) { return true; }
    function LCN_DeductIntensity(int $InstanceID, int $Intensity) { return true; }
    function LCN_Fadeout(int $InstanceID, int $Intensity, int $Ramp) { return true; }
    function LCN_FlipRelay(int $InstanceID) { return true; }
    function LCN_GetKnownDevices(int $InstanceID) { return Array(); }
    function LCN_LimitOutput(int $InstanceID, int $Value, int $Time, string $TimeType) { return true; }
    function LCN_LoadScene(int $InstanceID, int $Scene) { return true; }
    function LCN_LockTargetValue(int $InstanceID, int $Target) { return true; }
    function LCN_RampStop(int $InstanceID) { return true; }
    function LCN_ReleaseTargetValue(int $InstanceID, int $Target) { return true; }
    function LCN_RemoveGroup(int $InstanceID, int $Group) { return true; }
    function LCN_RequestLights(int $InstanceID) { return true; }
    function LCN_RequestRead(int $InstanceID) { return true; }
    function LCN_RequestStatus(int $InstanceID) { return true; }
    function LCN_RequestThresholds(int $InstanceID) { return true; }
    function LCN_SaveScene(int $InstanceID, int $Scene) { return true; }
    function LCN_SearchDevices(int $InstanceID, int $Segment) { return true; }
    function LCN_SelectSceneRegister(int $InstanceID, int $Register) { return true; }
    function LCN_SendCommand(int $InstanceID, string $Function, string $Data) { return true; }
    function LCN_SetDisplayText(int $InstanceID, int $Row, string $Text) { return true; }
    function LCN_SetDisplayTime(int $InstanceID, int $Row, int $Seconds) { return true; }
    function LCN_SetIntensity(int $InstanceID, int $Intensity, int $Ramp) { return true; }
    function LCN_SetLamp(int $InstanceID, int $Lamp, string $Action) { return true; }
    function LCN_SetRGBW(int $InstanceID, int $R, int $G, int $B, int $W) { return true; }
    function LCN_SetRelay(int $InstanceID, string $Value) { return true; }
    function LCN_SetTargetValue(int $InstanceID, int $Target, float $Value) { return true; }
    function LCN_ShiftTargetValue(int $InstanceID, int $Target, float $RelativeValue) { return true; }
    function LCN_ShutterMove(int $InstanceID, int $Position) { return true; }
    function LCN_ShutterMoveDown(int $InstanceID) { return true; }
    function LCN_ShutterMoveUp(int $InstanceID) { return true; }
    function LCN_ShutterStop(int $InstanceID) { return true; }
    function LCN_StartFlicker(int $InstanceID, string $Depth, string $Speed, int $Count) { return true; }
    function LCN_StopFlicker(int $InstanceID) { return true; }
    function LCN_SwitchDurationMin(int $InstanceID, int $Minutes, string $Fadeout, bool $Retentive) { return true; }
    function LCN_SwitchDurationSec(int $InstanceID, int $Seconds, string $Fadeout, bool $Retentive) { return true; }
    function LCN_SwitchMemory(int $InstanceID, int $Ramp) { return true; }
    function LCN_SwitchMode(int $InstanceID, int $Ramp) { return true; }
    function LCN_SwitchRelay(int $InstanceID, bool $SwitchOn) { return true; }
    function LCN_SwitchRelayTimer(int $InstanceID, int $Timerfactor) { return true; }
    function MBUS_UpdateValues(int $InstanceID) { return true; }
    function MC_CreateModule(int $InstanceID, string $ModuleURL) { return true; }
    function MC_DeleteModule(int $InstanceID, string $Module) { return true; }
    function MC_GetModuleList(int $InstanceID) { return Array(); }
    function MC_GetModuleRepositoryInfo(int $InstanceID, string $Module) { return Array(); }
    function MC_GetModuleRepositoryLocalBranchList(int $InstanceID, string $Module) { return Array(); }
    function MC_GetModuleRepositoryRemoteBranchList(int $InstanceID, string $Module) { return Array(); }
    function MC_IsModuleClean(int $InstanceID, string $Module) { return true; }
    function MC_IsModuleUpdateAvailable(int $InstanceID, string $Module) { return true; }
    function MC_IsModuleValid(int $InstanceID, string $Module) { return true; }
    function MC_ReloadModule(int $InstanceID, string $Module) { return true; }
    function MC_RevertModule(int $InstanceID, string $Module) { return true; }
    function MC_UpdateModule(int $InstanceID, string $Module) { return true; }
    function MC_UpdateModuleRepositoryBranch(int $InstanceID, string $Module, string $Branch) { return true; }
    function MSCK_SendText(int $InstanceID, string $Text) { return true; }
    function MXC_DimBrighter(int $InstanceID) { return true; }
    function MXC_DimDarker(int $InstanceID) { return true; }
    function MXC_DimSet(int $InstanceID, int $Intensity) { return true; }
    function MXC_DimStop(int $InstanceID) { return true; }
    function MXC_GetKnownDevices(int $InstanceID) { return Array(); }
    function MXC_RequestInfo(int $InstanceID) { return true; }
    function MXC_RequestStatus(int $InstanceID) { return true; }
    function MXC_SearchDevices(int $InstanceID) { return true; }
    function MXC_SendBoolean(int $InstanceID, bool $Value) { return true; }
    function MXC_SendFloat(int $InstanceID, float $Value) { return true; }
    function MXC_SendInteger(int $InstanceID, int $Value) { return true; }
    function MXC_SetTemperature(int $InstanceID, float $Temperature) { return true; }
    function MXC_ShutterMoveDown(int $InstanceID) { return true; }
    function MXC_ShutterMoveUp(int $InstanceID) { return true; }
    function MXC_ShutterStepDown(int $InstanceID) { return true; }
    function MXC_ShutterStepUp(int $InstanceID) { return true; }
    function MXC_ShutterStop(int $InstanceID) { return true; }
    function MXC_SwitchMode(int $InstanceID, bool $DeviceOn) { return true; }
    function MXC_UploadDataPointFile(int $InstanceID, string $Content) { return true; }
    function ModBus_RequestRead(int $InstanceID) { return true; }
    function ModBus_WriteCoil(int $InstanceID, bool $Value) { return true; }
    function ModBus_WriteRegister(int $InstanceID, float $Value) { return true; }
    function ModBus_WriteRegisterByte(int $InstanceID, int $Value) { return true; }
    function ModBus_WriteRegisterDWord(int $InstanceID, int $Value) { return true; }
    function ModBus_WriteRegisterInt64(int $InstanceID, float $Value) { return true; }
    function ModBus_WriteRegisterInteger(int $InstanceID, int $Value) { return true; }
    function ModBus_WriteRegisterReal(int $InstanceID, float $Value) { return true; }
    function ModBus_WriteRegisterReal64(int $InstanceID, float $Value) { return true; }
    function ModBus_WriteRegisterShortInt(int $InstanceID, int $Value) { return true; }
    function ModBus_WriteRegisterSmallInt(int $InstanceID, int $Value) { return true; }
    function ModBus_WriteRegisterWord(int $InstanceID, int $Value) { return true; }
    function NC_ActivateServer(int $InstanceID) { return true; }
    function NC_AddDevice(int $InstanceID, string $Token, string $Provider, string $DeviceID, string $Name, int $WebFrontConfiguratorID) { return ''; }
    function NC_GetDevices(int $InstanceID) { return Array(); }
    function NC_PushNotification(int $InstanceID, int $WebFrontConfiguratorID, string $Title, string $Body, string $Sound) { return true; }
    function NC_RemoveDevice(int $InstanceID, int $DeviceID) { return true; }
    function NC_RemoveDeviceConfigurator(int $InstanceID, int $DeviceID, int $WebFrontConfiguratorID) { return true; }
    function NC_SetDeviceConfigurator(int $InstanceID, int $DeviceID, int $WebFrontConfiguratorID, bool $Enabled) { return true; }
    function NC_SetDeviceName(int $InstanceID, int $DeviceID, string $Name) { return true; }
    function NC_TestDevice(int $InstanceID, int $DeviceID) { return true; }
    function OW_GetKnownDevices(int $InstanceID) { return Array(); }
    function OW_RequestStatus(int $InstanceID) { return true; }
    function OW_SetPin(int $InstanceID, int $Pin, bool $SwitchOn) { return true; }
    function OW_SetPort(int $InstanceID, int $Value) { return true; }
    function OW_SetPosition(int $InstanceID, int $Value) { return true; }
    function OW_SetStrobe(int $InstanceID, bool $Status) { return true; }
    function OW_SwitchMode(int $InstanceID, bool $SwitchOn) { return true; }
    function OW_ToggleMode(int $InstanceID) { return true; }
    function OW_WriteBytes(int $InstanceID, string $Data) { return true; }
    function OW_WriteBytesMasked(int $InstanceID, string $Data, int $Mask) { return true; }
    function OZW_GetKnownDevices(int $InstanceID) { return Array(); }
    function OZW_GetKnownItems(int $InstanceID, int $RootID) { return Array(); }
    function OZW_RequestStatus(int $InstanceID) { return true; }
    function OZW_WriteDataPoint(int $InstanceID, $Value) { return true; }
    function OZW_WriteDataPointEx(int $InstanceID, string $DataPoint, $Value) { return true; }
    function PJ_Backlight(int $InstanceID, bool $Status) { return true; }
    function PJ_Beep(int $InstanceID, int $TenthOfASecond) { return true; }
    function PJ_DimRGBW(int $InstanceID, int $R, int $RTime, int $G, int $GTime, int $B, int $BTime, int $W, int $WTime) { return true; }
    function PJ_DimServo(int $InstanceID, int $Channel, int $Value, int $Steps) { return true; }
    function PJ_LCDText(int $InstanceID, int $Line, string $Text) { return true; }
    function PJ_RequestStatus(int $InstanceID) { return true; }
    function PJ_RunProgram(int $InstanceID, int $Type) { return true; }
    function PJ_SetLEDs(int $InstanceID, bool $Green, bool $Yellow, bool $Red) { return true; }
    function PJ_SetRGBW(int $InstanceID, int $R, int $G, int $B, int $W) { return true; }
    function PJ_SetServo(int $InstanceID, int $Channel, int $Value) { return true; }
    function PJ_SetVoltage(int $InstanceID, float $Voltage) { return true; }
    function PJ_SwitchDuration(int $InstanceID, bool $DeviceOn, int $Duration) { return true; }
    function PJ_SwitchLED(int $InstanceID, int $LED, bool $Status) { return true; }
    function PJ_SwitchMode(int $InstanceID, bool $DeviceOn) { return true; }
    function POP3_GetCachedMails(int $InstanceID) { return Array(); }
    function POP3_GetMailEx(int $InstanceID, string $UID) { return Array(); }
    function POP3_UpdateCache(int $InstanceID) { return true; }
    function RegVar_GetBuffer(int $InstanceID) { return ''; }
    function RegVar_SendEvent(int $InstanceID, int $ReportID, string $Text) { return true; }
    function RegVar_SendPacket(int $InstanceID, string $Text, string $ClientIP, int $ClientPort) { return true; }
    function RegVar_SendText(int $InstanceID, string $Text) { return true; }
    function RegVar_SetBuffer(int $InstanceID, string $Text) { return true; }
    function S7_RequestRead(int $InstanceID) { return true; }
    function S7_Write(int $InstanceID, float $Value) { return true; }
    function S7_WriteBit(int $InstanceID, bool $Value) { return true; }
    function S7_WriteByte(int $InstanceID, int $Value) { return true; }
    function S7_WriteDWord(int $InstanceID, int $Value) { return true; }
    function S7_WriteInteger(int $InstanceID, int $Value) { return true; }
    function S7_WriteReal(int $InstanceID, float $Value) { return true; }
    function S7_WriteShortInt(int $InstanceID, int $Value) { return true; }
    function S7_WriteSmallInt(int $InstanceID, int $Value) { return true; }
    function S7_WriteWord(int $InstanceID, int $Value) { return true; }
    function SC_CreateSkin(int $InstanceID, string $SkinURL) { return true; }
    function SC_DeleteSkin(int $InstanceID, string $Skin) { return true; }
    function SC_GetSkin(int $InstanceID, string $Skin) { return Array(); }
    function SC_GetSkinIconContent(int $InstanceID, string $Skin, string $Icon) { return ''; }
    function SC_GetSkinList(int $InstanceID) { return Array(); }
    function SC_GetSkinRepositoryInfo(int $InstanceID, string $Skin) { return Array(); }
    function SC_Move(int $InstanceID, int $Position) { return true; }
    function SC_MoveDown(int $InstanceID, int $Duration) { return true; }
    function SC_MoveUp(int $InstanceID, int $Duration) { return true; }
    function SC_Stop(int $InstanceID) { return true; }
    function SC_UpdateSkin(int $InstanceID, string $Skin) { return true; }
    function SMS_RequestBalance(int $InstanceID) { return 0.0; }
    function SMS_RequestStatus(int $InstanceID, string $MsgID) { return ''; }
    function SMS_Send(int $InstanceID, string $Number, string $Text) { return ''; }
    function SMTP_SendMail(int $InstanceID, string $Subject, string $Textg) { return true; }
    function SMTP_SendMailAttachment(int $InstanceID, string $Subject, string $Text, string $Filename) { return true; }
    function SMTP_SendMailAttachmentEx(int $InstanceID, string $Address, string $Subject, string $Text, string $Filename) { return true; }
    function SMTP_SendMailEx(int $InstanceID, string $Address, string $Subject, string $Text) { return true; }
    function SMTP_SendMailMedia(int $InstanceID, string $Subject, string $Text, int $MediaID) { return true; }
    function SMTP_SendMailMediaEx(int $InstanceID, string $Address, string $Subject, string $Text, int $MediaID) { return true; }
    function SPRT_SendText(int $InstanceID, string $Text) { return true; }
    function SPRT_SetBreak(int $InstanceID, bool $OnOff) { return true; }
    function SPRT_SetDTR(int $InstanceID, bool $OnOff) { return true; }
    function SPRT_SetRTS(int $InstanceID, bool $OnOff) { return true; }
    function SSCK_SendPacket(int $InstanceID, string $Text, string $ClientIP, int $ClientPort) { return true; }
    function SSCK_SendText(int $InstanceID, string $Text) { return true; }
    function SetValue(int $VariableID, $Value) { return true; }
    function SetValueBoolean(int $VariableID, bool $Value) { return true; }
    function SetValueFloat(int $VariableID, float $Value) { return true; }
    function SetValueInteger(int $VariableID, int $Value) { return true; }
    function SetValueString(int $VariableID, string $Value) { return true; }
    function Sys_GetBattery() { return Array(); }
    function Sys_GetCPUInfo() { return Array(); }
    function Sys_GetHardDiskInfo() { return Array(); }
    function Sys_GetMemoryInfo() { return Array(); }
    function Sys_GetNetworkInfo() { return Array(); }
    function Sys_GetProcessInfo() { return Array(); }
    function Sys_GetSpooler() { return Array(); }
    function Sys_GetURLContent(string $URL) { return ''; }
    function Sys_GetURLContentEx(string $URL, array $Options) { return ''; }
    function Sys_Ping(string $Host, int $Timeout) { return true; }
    function TTS_GenerateFile(int $InstanceID, string $Text, string $Filename, int $Format) { return true; }
    function TTS_Speak(int $InstanceID, string $Text, bool $Wait) { return true; }
    function UC_FindInFiles(int $InstanceID, array $Files, string $SearchStr) { return Array(); }
    function UC_FindInvalidStrings(int $InstanceID) { return Array(); }
    function UC_FindReferences(int $InstanceID, int $ID) { return Array(); }
    function UC_FixInvalidStrings(int $InstanceID, array $References) { return true; }
    function UC_GetLastLogMessages(int $InstanceID, int $Type) { return Array(); }
    function UC_GetLogMessageStatistics(int $InstanceID) { return Array(); }
    function UC_RenameScript(int $InstanceID, int $ScriptID, string $Filename) { return true; }
    function UC_ReplaceInFiles(int $InstanceID, array $Files, string $SearchStr, string $ReplaceStr) { return Array(); }
    function UC_ResetLastLogMessages(int $InstanceID) { return true; }
    function UC_ResetLogMessageStatistics(int $InstanceID) { return true; }
    function UC_SendUsageData(int $InstanceID) { return true; }
    function USCK_SendText(int $InstanceID, string $Text) { return true; }
    function UVR_UpdateValues(int $InstanceID) { return true; }
    function VELLEUSB_ReadAnalogChannel(int $InstanceID, int $Channel) { return 0; }
    function VELLEUSB_ReadCounter(int $InstanceID, int $Counter) { return 0; }
    function VELLEUSB_ReadDigital(int $InstanceID) { return 0; }
    function VELLEUSB_ReadDigitalChannel(int $InstanceID, int $Channel) { return true; }
    function VELLEUSB_ResetCounter(int $InstanceID, int $Counter) { return true; }
    function VELLEUSB_SetCounterDebounceTime(int $InstanceID, int $Counter, int $Time) { return true; }
    function VELLEUSB_WriteAnalogChannel(int $InstanceID, int $Channel, int $Value) { return true; }
    function VELLEUSB_WriteDigital(int $InstanceID, int $Value) { return true; }
    function VELLEUSB_WriteDigitalChannel(int $InstanceID, int $Channel, bool $Value) { return true; }
    function VIO_PushText(int $InstanceID, string $Text) { return true; }
    function VIO_PushTextHEX(int $InstanceID, string $Text) { return true; }
    function VIO_SendText(int $InstanceID, string $Text) { return true; }
    function WFC_AddItem(int $InstanceID, string $ID, string $ClassName, string $Configuration, string $ParentID) { return true; }
    function WFC_AudioNotification(int $InstanceID, string $Title, int $MediaID) { return true; }
    function WFC_DeleteItem(int $InstanceID, string $ID) { return true; }
    function WFC_Execute(int $InstanceID, int $ActionID, int $TargetID, $Value) { return ''; }
    function WFC_FetchChartData(int $InstanceID, int $ObjectID, int $StartTime, int $TimeSpan, bool $IsHD) { return Array(); }
    function WFC_GetAggregatedValues(int $InstanceID, int $VariableID, int $AggregationSpan, int $StartTime, int $EndTime, int $Limit) { return Array(); }
    function WFC_GetItems(int $InstanceID) { return Array(); }
    function WFC_GetLoggedValues(int $InstanceID, int $VariableID, int $StartTime, int $EndTime, int $Limit) { return Array(); }
    function WFC_GetSnapshot(int $InstanceID) { return ''; }
    function WFC_GetSnapshotChanges(int $InstanceID, int $LastTimeStamp) { return ''; }
    function WFC_GetSnapshotChangesEx(int $InstanceID, int $CategoryID, int $LastTimeStamp) { return ''; }
    function WFC_GetSnapshotEx(int $InstanceID, int $CategoryID) { return ''; }
    function WFC_OpenCategory(int $InstanceID, int $CategoryID) { return true; }
    function WFC_PushNotification(int $InstanceID, string $Title, string $Text, string $Sound, int $TargetID) { return true; }
    function WFC_RegisterPNS(int $InstanceID, string $Token, string $Provider, string $DeviceID, string $DeviceName) { return ''; }
    function WFC_Reload(int $InstanceID) { return true; }
    function WFC_RenderChart(int $InstanceID, int $ObjectID, int $StartTime, int $TimeSpan, bool $IsHD, bool $IsExtrema, bool $IsDyn, int $Width, int $Height) { return ''; }
    function WFC_SendNotification(int $InstanceID, string $Title, string $Text, string $Icon, int $Timeout) { return true; }
    function WFC_SendPopup(int $InstanceID, string $Title, string $Text) { return true; }
    function WFC_SetItems(int $InstanceID, string $Items) { return true; }
    function WFC_SwitchPage(int $InstanceID, string $PageName) { return true; }
    function WFC_UpdateConfiguration(int $InstanceID, string $ID, string $Configuration) { return true; }
    function WFC_UpdateParentID(int $InstanceID, string $ID, string $ParentID) { return true; }
    function WFC_UpdatePosition(int $InstanceID, string $ID, int $Position) { return true; }
    function WFC_UpdateVisibility(int $InstanceID, string $ID, bool $Visible) { return true; }
    function WWW_UpdatePage(int $InstanceID) { return true; }
    function WinLIRC_SendOnce(int $InstanceID, string $Remote, string $Button) { return true; }
    function WuT_SwitchMode(int $InstanceID, bool $DeviceOn) { return true; }
    function WuT_UpdateValue(int $InstanceID) { return true; }
    function WuT_UpdateValues(int $InstanceID) { return true; }
    function XBee_SendBuffer(int $InstanceID, int $DestinationDevice, string $Buffer) { return true; }
    function XBee_SendCommand(int $InstanceID, string $Command) { return ''; }
    function ZW_AssociationAddToGroup(int $InstanceID, int $Group, int $Node) { return true; }
    function ZW_AssociationRemoveFromGroup(int $InstanceID, int $Group, int $Node) { return true; }
    function ZW_Basic(int $InstanceID, int $Value) { return true; }
    function ZW_ColorRGBWW(int $InstanceID, int $Red, int $Green, int $Blue, int $WarmWhite, int $ColdWhite) { return true; }
    function ZW_ConfigurationGetValue(int $InstanceID, int $Parameter) { return 0; }
    function ZW_ConfigurationResetValue(int $InstanceID, int $Parameter) { return true; }
    function ZW_ConfigurationResetValueEx(int $InstanceID, int $Parameter, int $Size) { return true; }
    function ZW_ConfigurationSetValue(int $InstanceID, int $Parameter, int $Value) { return true; }
    function ZW_ConfigurationSetValueEx(int $InstanceID, int $Parameter, int $Size, int $Value) { return true; }
    function ZW_DeleteFailedDevice(int $InstanceID, int $NodeID) { return true; }
    function ZW_DimSet(int $InstanceID, int $Intensity) { return true; }
    function ZW_DimStop(int $InstanceID) { return true; }
    function ZW_DoorLockOperation(int $InstanceID, int $Mode) { return true; }
    function ZW_GetKnownDevices(int $InstanceID) { return Array(); }
    function ZW_GetUserCodeList(int $InstanceID) { return Array(); }
    function ZW_GetWakeUpQueue(int $InstanceID) { return Array(); }
    function ZW_LockMode(int $InstanceID, bool $Locked) { return true; }
    function ZW_MeterReset(int $InstanceID) { return true; }
    function ZW_Optimize(int $InstanceID) { return true; }
    function ZW_ProtectionSet(int $InstanceID, int $Mode) { return true; }
    function ZW_PulseThermostatFanModeSet(int $InstanceID, int $FanMode) { return true; }
    function ZW_PulseThermostatModeSet(int $InstanceID, int $Mode) { return true; }
    function ZW_PulseThermostatPowerModeSet(int $InstanceID, int $PowerMode) { return true; }
    function ZW_PulseThermostatSetPointSet(int $InstanceID, int $SetPoint, float $Value) { return true; }
    function ZW_RequestAssociations(int $InstanceID) { return Array(); }
    function ZW_RequestInfo(int $InstanceID) { return true; }
    function ZW_RequestRoutingList(int $InstanceID) { return Array(); }
    function ZW_RequestStatus(int $InstanceID) { return true; }
    function ZW_RequestVersion(int $InstanceID) { return Array(); }
    function ZW_RequestWakeUpInterval(int $InstanceID) { return Array(); }
    function ZW_ResetToDefault(int $InstanceID) { return true; }
    function ZW_SearchDevices(int $InstanceID) { return true; }
    function ZW_SearchMainDevice(int $InstanceID) { return 0; }
    function ZW_SearchSubDevices(int $InstanceID) { return Array(); }
    function ZW_ShutterMoveDown(int $InstanceID) { return true; }
    function ZW_ShutterMoveUp(int $InstanceID) { return true; }
    function ZW_ShutterStop(int $InstanceID) { return true; }
    function ZW_StartAddDevice(int $InstanceID) { return true; }
    function ZW_StartAddNewPrimaryController(int $InstanceID) { return true; }
    function ZW_StartRemoveDevice(int $InstanceID) { return true; }
    function ZW_StopAddDevice(int $InstanceID) { return true; }
    function ZW_StopAddNewPrimaryController(int $InstanceID) { return true; }
    function ZW_StopRemoveDevice(int $InstanceID) { return true; }
    function ZW_SwitchAllMode(int $InstanceID, int $Mode) { return true; }
    function ZW_SwitchMode(int $InstanceID, bool $DeviceOn) { return true; }
    function ZW_Test(int $InstanceID) { return true; }
    function ZW_TestDevice(int $InstanceID, int $NodeID) { return true; }
    function ZW_ThermostatFanModeSet(int $InstanceID, int $FanMode) { return true; }
    function ZW_ThermostatModeSet(int $InstanceID, int $Mode) { return true; }
    function ZW_ThermostatSetPointSet(int $InstanceID, int $SetPoint, float $Value) { return true; }
    function ZW_UserCodeLearn(int $InstanceID, bool $Enabled) { return true; }
    function ZW_UserCodeRemove(int $InstanceID, int $Identifier) { return true; }
    function ZW_WakeUpComplete(int $InstanceID) { return true; }
    function ZW_WakeUpKeepAlive(int $InstanceID, bool $KeepAlive) { return true; }
    function ZW_WakeUpSetInterval(int $InstanceID, int $Seconds) { return true; }

    class IPSModule {
	    protected $InstanceID;
	    public function __construct($InstanceID) {}
	    public function Create() {}
	    public function Destroy() {}
	    protected function GetIDForIdent($Ident) {}
	    protected function RegisterPropertyBoolean($Name, $DefaultValue) {}
	    protected function RegisterPropertyInteger($Name, $DefaultValue) {}
	    protected function RegisterPropertyFloat($Name, $DefaultValue) {}
	    protected function RegisterPropertyString($Name, $DefaultValue) {}
	    protected function RegisterTimer($Ident, $Milliseconds, $ScriptText) {}
	    protected function SetTimerInterval($Ident, $Milliseconds) {}
	    protected function RegisterScript($Ident, $Name, $Content, $Position) {}
	    protected function RegisterVariableBoolean($Ident, $Name, $Profile, $Position) {}
	    protected function RegisterVariableInteger($Ident, $Name, $Profile, $Position) {}
	    protected function RegisterVariableFloat($Ident, $Name, $Profile, $Position) {}
	    protected function RegisterVariableString($Ident, $Name, $Profile, $Position) {}
	    protected function UnregisterVariable($Ident) {}
	    protected function MaintainVariable($Ident, $Name, $Type, $Profile, $Position, $Keep) {}
	    protected function EnableAction($Ident) {}
	    protected function DisableAction($Ident) {}
	    protected function MaintainAction($Ident, $Keep) {}
	    protected function ReadPropertyBoolean($Name) {}
	    protected function ReadPropertyInteger($Name) {}
	    protected function ReadPropertyFloat($Name) {}
	    protected function ReadPropertyString($Name) {}
	    protected function SendDataToParent($Data) {}
	    protected function SendDataToChildren($Data) {}
	    protected function ConnectParent($ModuleID) {}
	    protected function RequireParent($ModuleID) {}
	    protected function ForceParent($ModuleID) {}
	    protected function SetStatus($Status) {}
	    protected function SetSummary($Summary) {}
	    protected function SetBuffer($Name, $Data) {}
	    protected function GetBuffer($Name) {}
	    protected function SendDebug($Message, $Data, $Format) {}
	    protected function RegisterMessage($SenderID, $Message) {}
	    protected function UnregisterMessage($SenderID, $Message) {}
	    public function MessageSink($TimeStamp, $SenderID, $Message, $Data) {}
	    public function ApplyChanges() {}
	    protected function SetReceiveDataFilter($RequiredRegexMatch) {}
	    public function ReceiveData($JSONString) {}
	    protected function SetForwardDataFilter($RequiredRegexMatch) {}
	    public function ForwardData($JSONString) {}
	    public function RequestAction($Ident, $Value) {}
	    public function GetConfigurationForm() {}
	    public function GetConfigurationForParent() {}
	    public function Translate($Text) {}
    }
}

?>