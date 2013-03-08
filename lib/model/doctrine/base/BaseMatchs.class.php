<?php

/**
 * BaseMatchs
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property varchar $ip
 * @property integer $server_id
 * @property integer $season_id
 * @property integer $team_a
 * @property varchar $team_a_flag
 * @property varchar $team_a_name
 * @property integer $team_b
 * @property varchar $team_b_flag
 * @property varchar $team_b_name
 * @property integer $status
 * @property integer $score_a
 * @property integer $score_b
 * @property integer $max_round
 * @property varchar $rules
 * @property integer $overtime_startmoney
 * @property integer $overtime_max_round
 * @property boolean $config_full_score
 * @property boolean $config_ot
 * @property boolean $config_streamer
 * @property boolean $config_knife_round
 * @property boolean $config_switch_auto
 * @property boolean $config_auto_change_password
 * @property varchar $config_password
 * @property boolean $config_heatmap
 * @property varchar $config_authkey
 * @property boolean $enable
 * @property enum $map_selection_mode
 * @property boolean $ingame_enable
 * @property integer $current_map
 * @property boolean $force_zoom_match
 * @property varchar $tv_record_file
 * @property integer $identifier_id
 * @property Servers $Server
 * @property Teams $TeamA
 * @property Teams $TeamB
 * @property Maps $Map
 * @property Seasons $Season
 * @property Doctrine_Collection $Maps
 * @property Doctrine_Collection $Players
 * @property Doctrine_Collection $Round
 * @property Doctrine_Collection $RoundSummary
 * @property Doctrine_Collection $PlayerKill
 * @property Doctrine_Collection $PlayersHeatmap
 * 
 * @method integer             getId()                          Returns the current record's "id" value
 * @method varchar             getIp()                          Returns the current record's "ip" value
 * @method integer             getServerId()                    Returns the current record's "server_id" value
 * @method integer             getSeasonId()                    Returns the current record's "season_id" value
 * @method integer             getTeamA()                       Returns the current record's "team_a" value
 * @method varchar             getTeamAFlag()                   Returns the current record's "team_a_flag" value
 * @method varchar             getTeamAName()                   Returns the current record's "team_a_name" value
 * @method integer             getTeamB()                       Returns the current record's "team_b" value
 * @method varchar             getTeamBFlag()                   Returns the current record's "team_b_flag" value
 * @method varchar             getTeamBName()                   Returns the current record's "team_b_name" value
 * @method integer             getStatus()                      Returns the current record's "status" value
 * @method integer             getScoreA()                      Returns the current record's "score_a" value
 * @method integer             getScoreB()                      Returns the current record's "score_b" value
 * @method integer             getMaxRound()                    Returns the current record's "max_round" value
 * @method varchar             getRules()                       Returns the current record's "rules" value
 * @method integer             getOvertimeStartmoney()          Returns the current record's "overtime_startmoney" value
 * @method integer             getOvertimeMaxRound()            Returns the current record's "overtime_max_round" value
 * @method boolean             getConfigFullScore()             Returns the current record's "config_full_score" value
 * @method boolean             getConfigOt()                    Returns the current record's "config_ot" value
 * @method boolean             getConfigStreamer()              Returns the current record's "config_streamer" value
 * @method boolean             getConfigKnifeRound()            Returns the current record's "config_knife_round" value
 * @method boolean             getConfigSwitchAuto()            Returns the current record's "config_switch_auto" value
 * @method boolean             getConfigAutoChangePassword()    Returns the current record's "config_auto_change_password" value
 * @method varchar             getConfigPassword()              Returns the current record's "config_password" value
 * @method boolean             getConfigHeatmap()               Returns the current record's "config_heatmap" value
 * @method varchar             getConfigAuthkey()               Returns the current record's "config_authkey" value
 * @method boolean             getEnable()                      Returns the current record's "enable" value
 * @method enum                getMapSelectionMode()            Returns the current record's "map_selection_mode" value
 * @method boolean             getIngameEnable()                Returns the current record's "ingame_enable" value
 * @method integer             getCurrentMap()                  Returns the current record's "current_map" value
 * @method boolean             getForceZoomMatch()              Returns the current record's "force_zoom_match" value
 * @method varchar             getTvRecordFile()                Returns the current record's "tv_record_file" value
 * @method integer             getIdentifierId()                Returns the current record's "identifier_id" value
 * @method Servers             getServer()                      Returns the current record's "Server" value
 * @method Teams               getTeamA()                       Returns the current record's "TeamA" value
 * @method Teams               getTeamB()                       Returns the current record's "TeamB" value
 * @method Maps                getMap()                         Returns the current record's "Map" value
 * @method Seasons             getSeason()                      Returns the current record's "Season" value
 * @method Doctrine_Collection getMaps()                        Returns the current record's "Maps" collection
 * @method Doctrine_Collection getPlayers()                     Returns the current record's "Players" collection
 * @method Doctrine_Collection getRound()                       Returns the current record's "Round" collection
 * @method Doctrine_Collection getRoundSummary()                Returns the current record's "RoundSummary" collection
 * @method Doctrine_Collection getPlayerKill()                  Returns the current record's "PlayerKill" collection
 * @method Doctrine_Collection getPlayersHeatmap()              Returns the current record's "PlayersHeatmap" collection
 * @method Matchs              setId()                          Sets the current record's "id" value
 * @method Matchs              setIp()                          Sets the current record's "ip" value
 * @method Matchs              setServerId()                    Sets the current record's "server_id" value
 * @method Matchs              setSeasonId()                    Sets the current record's "season_id" value
 * @method Matchs              setTeamA()                       Sets the current record's "team_a" value
 * @method Matchs              setTeamAFlag()                   Sets the current record's "team_a_flag" value
 * @method Matchs              setTeamAName()                   Sets the current record's "team_a_name" value
 * @method Matchs              setTeamB()                       Sets the current record's "team_b" value
 * @method Matchs              setTeamBFlag()                   Sets the current record's "team_b_flag" value
 * @method Matchs              setTeamBName()                   Sets the current record's "team_b_name" value
 * @method Matchs              setStatus()                      Sets the current record's "status" value
 * @method Matchs              setScoreA()                      Sets the current record's "score_a" value
 * @method Matchs              setScoreB()                      Sets the current record's "score_b" value
 * @method Matchs              setMaxRound()                    Sets the current record's "max_round" value
 * @method Matchs              setRules()                       Sets the current record's "rules" value
 * @method Matchs              setOvertimeStartmoney()          Sets the current record's "overtime_startmoney" value
 * @method Matchs              setOvertimeMaxRound()            Sets the current record's "overtime_max_round" value
 * @method Matchs              setConfigFullScore()             Sets the current record's "config_full_score" value
 * @method Matchs              setConfigOt()                    Sets the current record's "config_ot" value
 * @method Matchs              setConfigStreamer()              Sets the current record's "config_streamer" value
 * @method Matchs              setConfigKnifeRound()            Sets the current record's "config_knife_round" value
 * @method Matchs              setConfigSwitchAuto()            Sets the current record's "config_switch_auto" value
 * @method Matchs              setConfigAutoChangePassword()    Sets the current record's "config_auto_change_password" value
 * @method Matchs              setConfigPassword()              Sets the current record's "config_password" value
 * @method Matchs              setConfigHeatmap()               Sets the current record's "config_heatmap" value
 * @method Matchs              setConfigAuthkey()               Sets the current record's "config_authkey" value
 * @method Matchs              setEnable()                      Sets the current record's "enable" value
 * @method Matchs              setMapSelectionMode()            Sets the current record's "map_selection_mode" value
 * @method Matchs              setIngameEnable()                Sets the current record's "ingame_enable" value
 * @method Matchs              setCurrentMap()                  Sets the current record's "current_map" value
 * @method Matchs              setForceZoomMatch()              Sets the current record's "force_zoom_match" value
 * @method Matchs              setTvRecordFile()                Sets the current record's "tv_record_file" value
 * @method Matchs              setIdentifierId()                Sets the current record's "identifier_id" value
 * @method Matchs              setServer()                      Sets the current record's "Server" value
 * @method Matchs              setTeamA()                       Sets the current record's "TeamA" value
 * @method Matchs              setTeamB()                       Sets the current record's "TeamB" value
 * @method Matchs              setMap()                         Sets the current record's "Map" value
 * @method Matchs              setSeason()                      Sets the current record's "Season" value
 * @method Matchs              setMaps()                        Sets the current record's "Maps" collection
 * @method Matchs              setPlayers()                     Sets the current record's "Players" collection
 * @method Matchs              setRound()                       Sets the current record's "Round" collection
 * @method Matchs              setRoundSummary()                Sets the current record's "RoundSummary" collection
 * @method Matchs              setPlayerKill()                  Sets the current record's "PlayerKill" collection
 * @method Matchs              setPlayersHeatmap()              Sets the current record's "PlayersHeatmap" collection
 * 
 * @package    PhpProject1
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMatchs extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('matchs');
        $this->hasColumn('id', 'integer', 20, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 20,
             ));
        $this->hasColumn('ip', 'varchar', 50, array(
             'type' => 'varchar',
             'length' => 50,
             ));
        $this->hasColumn('server_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('season_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('team_a', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('team_a_flag', 'varchar', 2, array(
             'type' => 'varchar',
             'length' => 2,
             ));
        $this->hasColumn('team_a_name', 'varchar', 25, array(
             'type' => 'varchar',
             'length' => 25,
             ));
        $this->hasColumn('team_b', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('team_b_flag', 'varchar', 2, array(
             'type' => 'varchar',
             'length' => 2,
             ));
        $this->hasColumn('team_b_name', 'varchar', 25, array(
             'type' => 'varchar',
             'length' => 25,
             ));
        $this->hasColumn('status', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
        $this->hasColumn('score_a', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('score_b', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('max_round', 'integer', 3, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 3,
             ));
        $this->hasColumn('rules', 'varchar', 200, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 200,
             ));
        $this->hasColumn('overtime_startmoney', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('overtime_max_round', 'integer', 3, array(
             'type' => 'integer',
             'length' => 3,
             ));
        $this->hasColumn('config_full_score', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('config_ot', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('config_streamer', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('config_knife_round', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('config_switch_auto', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('config_auto_change_password', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('config_password', 'varchar', 50, array(
             'type' => 'varchar',
             'length' => 50,
             ));
        $this->hasColumn('config_heatmap', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('config_authkey', 'varchar', 200, array(
             'type' => 'varchar',
             'length' => 200,
             ));
        $this->hasColumn('enable', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('map_selection_mode', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'bo2',
              1 => 'bo3_modea',
              2 => 'bo3_modeb',
              3 => 'normal',
             ),
             ));
        $this->hasColumn('ingame_enable', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('current_map', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('force_zoom_match', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('tv_record_file', 'varchar', 255, array(
             'type' => 'varchar',
             'length' => 255,
             ));
        $this->hasColumn('identifier_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Servers as Server', array(
             'local' => 'server_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('Teams as TeamA', array(
             'local' => 'team_a',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('Teams as TeamB', array(
             'local' => 'team_b',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('Maps as Map', array(
             'local' => 'current_map',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('Seasons as Season', array(
             'local' => 'season_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('Maps', array(
             'local' => 'id',
             'foreign' => 'match_id'));

        $this->hasMany('Players', array(
             'local' => 'id',
             'foreign' => 'match_id'));

        $this->hasMany('Round', array(
             'local' => 'id',
             'foreign' => 'match_id'));

        $this->hasMany('RoundSummary', array(
             'local' => 'id',
             'foreign' => 'match_id'));

        $this->hasMany('PlayerKill', array(
             'local' => 'id',
             'foreign' => 'match_id'));

        $this->hasMany('PlayersHeatmap', array(
             'local' => 'id',
             'foreign' => 'match_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}